<?php

require(__DIR__ . '/PHPMailer/PHPMailerAutoload.php');
require __DIR__ . '/PHPMailer/class.phpmailer.php';
require __DIR__ . '/PHPMailer/class.smtp.php';

date_default_timezone_set('Asia/Kolkata');

function redirect_with_alert($message, $target = 'index.php')
{
    echo '<script>';
    echo 'alert(' . json_encode($message) . ');';
    echo 'window.location.href = ' . json_encode($target) . ';';
    echo '</script>';
    exit;
}

function build_mailer()
{
    $mailer = new PHPMailer();
    $mailer->IsSMTP();
    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'support@technofra.com';
    $mailer->Password = 'kcdi vqko dwgv yaku';
    $mailer->SMTPSecure = 'tls';
    $mailer->Port = 587;
    $mailer->CharSet = 'UTF-8';
    $mailer->isHTML(true);

    return $mailer;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? ''); 
$contact = trim($_POST['contact'] ?? ''); 
$hidden_field = trim($_POST['hidden_field'] ?? '');
$recaptcha_response = trim($_POST['g-recaptcha-response'] ?? '');
$currentDateTime = date('Y-m-d H:i:s');
$brochure_path = __DIR__ . '/assets/pdf/technofra-brochure.pdf';
$clean_contact = preg_replace('/\D+/', '', $contact);
$errors = [];

if ($hidden_field !== '') {
    $errors[] = 'Bot detected.';
}

if ($name === '' || $email === ''  || $contact === '' ) {
    $errors[] = 'All fields are required.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if ($clean_contact === '' || strlen($clean_contact) < 10 || strlen($clean_contact) > 15) {
    $errors[] = 'Please enter a valid contact number.';
}

if ($recaptcha_response === '') {
    $errors[] = 'Please complete the reCAPTCHA verification.';
} else {
    $recaptcha_secret = '6LekpbEqAAAAAHOcLdwCe3Hh-I35sbORdOByTMht';
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_data = [
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? '',
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $recaptcha_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($recaptcha_data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    $recaptcha_result = curl_exec($ch);
    $curl_error = curl_error($ch);
    curl_close($ch);

    $recaptcha_decoded = json_decode($recaptcha_result, true);
    if (!is_array($recaptcha_decoded) || empty($recaptcha_decoded['success'])) {
        $errors[] = $curl_error !== '' ? 'reCAPTCHA verification failed. Please try again.' : 'reCAPTCHA verification failed. Please try again.';
    }
}

if (!file_exists($brochure_path)) {
    $errors[] = 'Company profile PDF file was not found on the server.';
}

if (!empty($errors)) {
    redirect_with_alert(implode("\n", $errors), 'index.php');
}

$safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safe_contact = htmlspecialchars($contact, ENT_QUOTES, 'UTF-8');
$safe_message = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

$htmlbody = '
<html>
    <head>
        <title>Company Profile Download Enquiry</title>
    </head>
    <body style="font-family: Arial, Helvetica, sans-serif; background:#f7f9fc; margin:0; padding:24px;">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody>
                <tr>
                    <td align="center">
                        <table width="640" cellspacing="0" cellpadding="0" border="0" style="background:#ffffff; border:1px solid #dfe6ee;">
                            <tbody>
                                <tr>
                                    <td style="background:#000000; padding:18px 24px;">
                                        <img src="https://technofra.com/assets/image/technofra-logo.png" alt="Technofra" style="max-width:220px; width:100%; height:auto;">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:28px 24px 12px;">
                                        <h2 style="margin:0; color:#0b2e59;">Company Profile Request</h2>
                                        <p style="margin:12px 0 0; color:#4a5568; line-height:1.7;">
                                            A visitor submitted the brochure request form on the website.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 24px 28px;">
                                        <table width="100%" cellspacing="0" cellpadding="10" border="0" style="background:#eef6fb; border:1px solid #d8e7f2;">
                                            <tbody>
                                                <tr>
                                                    <td width="180" style="color:#0b2e59;"><strong>Full Name</strong></td>
                                                    <td style="color:#334155;">' . $safe_name . '</td>
                                                </tr>
                                                <tr>
                                                    <td width="180" style="color:#0b2e59;"><strong>Email ID</strong></td>
                                                    <td style="color:#334155;">' . $safe_email . '</td>
                                                </tr>
                                                <tr>
                                                    <td width="180" style="color:#0b2e59;"><strong>Contact Details</strong></td>
                                                    <td style="color:#334155;">' . $safe_contact . '</td>
                                                </tr>
                                                
                                             
                                                <tr>
                                                    <td width="180" style="color:#0b2e59;"><strong>Requested At</strong></td>
                                                    <td style="color:#334155;">' . htmlspecialchars($currentDateTime, ENT_QUOTES, 'UTF-8') . '</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 24px 24px; color:#4a5568; line-height:1.7;">
                                        Regards,<br>
                                        Team Technofra<br>
                                        Email: <a href="mailto:support@technofra.com">support@technofra.com</a><br>
                                        Contact No: +91 808 080 3374
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>';

$client_htmlbody = '
<html>
    <head>
        <title>Thank You for Requesting the Company Profile</title>
    </head>
    <body style="font-family: Arial, Helvetica, sans-serif; background:#f7f9fc; margin:0; padding:24px;">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody>
                <tr>
                    <td align="center">
                        <table width="640" cellspacing="0" cellpadding="0" border="0" style="background:#ffffff; border:1px solid #dfe6ee;">
                            <tbody>
                                <tr>
                                    <td style="background:#000000; padding:18px 24px;">
                                        <img src="https://technofra.com/assets/image/technofra-logo.png" alt="Technofra" style="max-width:220px; width:100%; height:auto;">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:28px 24px 12px;">
                                        <h2 style="margin:0; color:#0b2e59;">Hi ' . $safe_name . ',</h2>
                                        <p style="margin:12px 0 0; color:#4a5568; line-height:1.8;">
                                            Thank you for requesting the Technofra company profile. We have attached the brochure PDF with this email for your reference.
                                        </p>
                                        <p style="margin:12px 0 0; color:#4a5568; line-height:1.8;">
                                            Our team will review your enquiry and get in touch with you shortly. If you have any immediate questions, you can reply to this email or write to
                                            <a href="mailto:info@technofra.com">info@technofra.com</a>.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 24px 24px;">
                                        <table width="100%" cellspacing="0" cellpadding="16" border="0" style="background:#eef6fb; border:1px solid #d8e7f2;">
                                            <tbody>
                                                <tr>
                                                    <td style="color:#334155; line-height:1.8;">
                                                        Website: <a href="https://technofra.com/">https://technofra.com/</a><br>
                                                        Brochure attached: <strong>Technofra Company Profile PDF</strong><br>
                                                        Support: <a href="mailto:support@technofra.com">support@technofra.com</a><br>
                                                        Contact: +91 808 080 3374
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 24px 24px; color:#4a5568; line-height:1.7;">
                                        Best Regards,<br>
                                        Team Technofra
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>';

$mail = build_mailer();
$mail->setFrom('support@technofra.com', 'Technofra');
$mail->addAddress('support@technofra.com');
$mail->addReplyTo($email, $name);
$mail->Subject = 'New Brochure Download Enquiry – Technofra Website (' . $currentDateTime . ')';
$mail->Body = $htmlbody;
$mail->AltBody = "Company profile request from {$name} ({$email}).";

if (!$mail->send()) {
    header('Location: failed.php');
    exit;
}

$client_mail = build_mailer();
$client_mail->setFrom('support@technofra.com', 'Technofra');
$client_mail->addAddress($email, $name);
$client_mail->addBCC('support@technofra.com', 'Technofra Admin');
$client_mail->Subject = 'Thank you for requesting the Technofra company profile';
$client_mail->Body = $client_htmlbody;
$client_mail->AltBody = "Download - Technofra Company Profile.";
$client_mail->addAttachment($brochure_path, 'technofra-brochure.pdf');

if (!$client_mail->send()) {
    header('Location: failed.php');
    exit;
}

header('Location: success.php');
exit;
