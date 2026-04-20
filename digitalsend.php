<?php

require(__DIR__ . '/PHPMailer/PHPMailerAutoload.php');
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';

// Server-Side Validation
$name = trim($_POST['name']); 
$email = trim($_POST['email']);
$contact = trim($_POST['contact']);
$company = trim($_POST['company']);
$website = trim($_POST['website']);
$hidden_field = trim($_POST['hidden_field']); // Honeypot field

// Set the default timezone to Indian Standard Time (IST)
date_default_timezone_set('Asia/Kolkata');

// Get the current date and time
$currentDateTime = date('Y-m-d H:i:s');
$formattedDateTime = date('d M Y h:i A');

function renderEmailInfoRow($label, $value)
{
    return '
        <tr>
            <td style="padding:12px 14px;border-bottom:1px solid #e8edf2;font-size:13px;font-weight:700;color:#3f4348;width:170px;vertical-align:top;">' . $label . '</td>
            <td style="padding:12px 14px;border-bottom:1px solid #e8edf2;font-size:13px;line-height:1.7;color:#60656b;">' . $value . '</td>
        </tr>
    ';
}

function renderDigitalMarketingEmail(array $options)
{
    $preheader = $options['preheader'];
    $headline = $options['headline'];
    $lead = $options['lead'];
    $ctaLabel = $options['cta_label'];
    $ctaHref = $options['cta_href'];
    $summaryTitle = $options['summary_title'];
    $summaryRows = $options['summary_rows'];
    $stepsTitle = $options['steps_title'];
    $steps = $options['steps'];
    $footerTitle = $options['footer_title'];
    $footerLinks = $options['footer_links'];
    $footerNote = $options['footer_note'];
    $preheaderDate = $options['preheader_date'] ?? '';
    $introHtml = $options['intro_html'] ?? '';
    $closingHtml = $options['closing_html'] ?? '';
    $accentColor = $options['accent_color'] ?? '#003366';

    $summaryRowsHtml = '';
    foreach ($summaryRows as $row) {
        $summaryRowsHtml .= renderEmailInfoRow($row['label'], $row['value']);
    }

    $stepsHtml = '';
    foreach ($steps as $step) {
        $stepsHtml .= '
            <tr>
                <td style="padding:0 0 18px;vertical-align:top;">
                    <table role="presentation" style="width:100%;border-collapse:collapse;">
                        <tr>
                            <td style="width:42px;vertical-align:top;padding-right:14px;">
                                <div style="width:34px;height:34px;border:1px solid ' . $accentColor . ';color:' . $accentColor . ';font-size:18px;font-weight:700;line-height:34px;text-align:center;">' . $step['icon'] . '</div>
                            </td>
                            <td style="vertical-align:top;">
                                <div style="font-size:14px;font-weight:700;line-height:1.5;color:#3f4348;margin-bottom:4px;">' . $step['title'] . '</div>
                                <div style="font-size:13px;line-height:1.7;color:#737980;">' . $step['text'] . '</div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        ';
    }

    $footerLinksHtml = '';
    $footerLinksCount = count($footerLinks);
    foreach ($footerLinks as $index => $link) {
        $footerLinksHtml .= '<a href="' . $link['href'] . '" style="color:' . $accentColor . ';text-decoration:none;">' . $link['label'] . '</a>';
        if ($index < $footerLinksCount - 1) {
            $footerLinksHtml .= '<span style="color:#a0a0a0;padding:0 8px;">|</span>';
        }
    }

    return '
    <div style="margin:0;padding:20px 0;background:#f3f3f3;font-family:Arial,Helvetica,sans-serif;color:#4a4a4a;">
        <div style="width:100%;max-width:560px;margin:0 auto;background:#ffffff;">
            <div style="padding:18px 28px 0;font-size:11px;color:#8a8a8a;">
                <table role="presentation" style="width:100%;border-collapse:collapse;">
                    <tr>
                        <td style="font-size:11px;line-height:1.5;color:#8a8a8a;">' . $preheader . '</td>
                        <td style="font-size:11px;line-height:1.5;color:#8a8a8a;text-align:right;">' . $preheaderDate . '</td>
                    </tr>
                </table>
            </div>

            <div style="padding:34px 80px 10px;">
                <div style="margin-bottom:22px;">
                    <img src="https://technofra.com/logo-black.png" alt="Technofra" style="width:250px;height:45px;display:block;">
                </div>
                <h1 style="margin:0 0 24px;font-size:24px;line-height:1.25;color:#3f4348;font-weight:700;">' . $headline . '</h1>
                <div style="margin:0;font-size:16px;line-height:1.7;color:#60656b;">' . $lead . '</div>
                ' . $introHtml . '
                <a href="' . $ctaHref . '" style="display:inline-block;margin-top:28px;background:' . $accentColor . ';color:#ffffff;text-decoration:none;padding:16px 34px;font-size:14px;line-height:1;box-shadow:0 1px 3px rgba(0,0,0,0.12);">' . $ctaLabel . '</a>
            </div>

            <div style="margin:48px 80px 40px;border:1px solid rgba(0,51,102,0.35);padding:34px 30px 26px;">
                <h2 style="margin:0 0 24px;font-size:18px;font-weight:700;color:#3f4348;">' . $summaryTitle . '</h2>
                <table role="presentation" style="width:100%;border-collapse:collapse;margin-bottom:26px;">
                    ' . $summaryRowsHtml . '
                </table>

                <div style="border-top:1px solid #e6e6e6;padding-top:24px;">
                    <h3 style="margin:0 0 24px;font-size:16px;font-weight:700;color:#3f4348;">' . $stepsTitle . '</h3>
                    <table role="presentation" style="width:100%;border-collapse:collapse;">
                        ' . $stepsHtml . '
                    </table>
                </div>
            </div>

            <div style="padding:0 80px 26px;">
                <h3 style="margin:0 0 20px;font-size:15px;color:#555b61;">' . $footerTitle . '</h3>
                <div style="font-size:14px;line-height:1.8;">' . $footerLinksHtml . '</div>
            </div>

            <div style="margin:24px 50px 0;background:#f4f6f8;padding:28px 28px 26px;font-size:11px;line-height:1.8;color:#8a9198;">
                ' . $closingHtml . '
                <div>' . $footerNote . '</div>
            </div>
        </div>
    </div>
    ';
}

$errors = [];

// Validate Honeypot
if (!empty($hidden_field)) {
    $errors[] = "Bot detected!";
}

// Validate Email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address.";
}

// Validate Phone Number (10 digits only)
if (!preg_match('/^\d{10}$/', $contact)) {
    $errors[] = "Invalid phone number. Please enter a 10-digit number.";
}

// Validate Other Fields
if (empty($name) || empty($company)) {
    $errors[] = "Name and company are required.";
}

if ($website !== '' && !filter_var($website, FILTER_VALIDATE_URL)) {
    $errors[] = "Please enter a valid website URL.";
}

// Validate Google reCAPTCHA
$recaptcha_secret = '6LekpbEqAAAAAHOcLdwCe3Hh-I35sbORdOByTMht';
$recaptcha_response = $_POST['g-recaptcha-response'];
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';

$recaptcha_data = [
    'secret' => $recaptcha_secret,
    'response' => $recaptcha_response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $recaptcha_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($recaptcha_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$recaptcha_result = curl_exec($ch);
curl_close($ch);

$recaptcha_decoded = json_decode($recaptcha_result, true);

if (!$recaptcha_decoded['success']) {
    $errors[] = "reCAPTCHA verification failed. Please try again.";
}

// Display errors and exit if any
if (!empty($errors)) {
    echo '<script>';
    echo 'alert("' . implode('\\n', $errors) . '");';
    echo 'window.location.href = "contact.php";';
    echo '</script>';
    exit;
}

// Prepare email content for admin and client
$safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safeContact = htmlspecialchars($contact, ENT_QUOTES, 'UTF-8');
$safeCompany = htmlspecialchars($company, ENT_QUOTES, 'UTF-8');
$safeWebsite = htmlspecialchars($website !== '' ? $website : 'Not provided', ENT_QUOTES, 'UTF-8');
$safeCurrentDateTime = htmlspecialchars($formattedDateTime, ENT_QUOTES, 'UTF-8');
$emailLink = '<a href="mailto:' . $safeEmail . '" style="color:#2563eb;text-decoration:underline;">' . $safeEmail . '</a>';
$websiteLink = $website !== ''
    ? '<a href="' . $safeWebsite . '" style="color:#2563eb;text-decoration:underline;">' . $safeWebsite . '</a>'
    : $safeWebsite;

$htmlbody = renderDigitalMarketingEmail([
    'preheader' => 'New website enquiry received.',
    'headline' => 'New Digital Marketing Enquiry',
    'lead' => 'A new enquiry has been received from the website. Below is the complete lead summary captured from the digital marketing form.',
    'cta_label' => 'Review Enquiry',
    'cta_href' => 'mailto:' . $email,
    'summary_title' => 'Lead Summary',
    'summary_rows' => [
        ['label' => 'Name', 'value' => $safeName],
        ['label' => 'Email', 'value' => $emailLink],
        ['label' => 'Phone', 'value' => $safeContact],
        ['label' => 'Company', 'value' => $safeCompany],
        ['label' => 'Website', 'value' => $websiteLink],
        ['label' => 'Submitted At', 'value' => $safeCurrentDateTime],
    ],
    'steps_title' => 'Recommended Next Steps',
    'steps' => [
        ['icon' => '1', 'title' => 'Review the client details', 'text' => 'Check the submitted business details and understand the client requirements before reaching out.'],
        ['icon' => '2', 'title' => 'Connect with the lead quickly', 'text' => 'Call or email the client and schedule the free strategy discussion as early as possible.'],
    ],
    'footer_title' => 'Quick Actions',
    'footer_links' => [
        ['label' => 'Reply to Client', 'href' => 'mailto:' . $email],
        ['label' => 'Visit Website', 'href' => $website !== '' ? $website : 'https://technofra.com/'],
        ['label' => 'Support Team', 'href' => 'mailto:support@technofra.com'],
    ],
    'footer_note' => 'This notification was generated automatically after a successful enquiry submission on the Technofra website.',
    'preheader_date' => $safeCurrentDateTime,
    'closing_html' => '<div style="margin-bottom:10px;">Technofra Digital Marketing Team</div>',
]);

$client_htmlbody = renderDigitalMarketingEmail([
    'preheader' => 'Your enquiry has been submitted successfully.',
    'headline' => 'Thank you for contacting Technofra',
    'lead' => 'Hi ' . $safeName . ', your enquiry has been submitted successfully. Our team has received your request and will get back to you shortly with the next steps.',
    'cta_label' => 'Visit Website',
    'cta_href' => 'https://technofra.com/',
    'summary_title' => 'Your Submitted Details',
    'summary_rows' => [
        ['label' => 'Name', 'value' => $safeName],
        ['label' => 'Email', 'value' => $emailLink],
        ['label' => 'Phone', 'value' => $safeContact],
        ['label' => 'Company', 'value' => $safeCompany],
        ['label' => 'Website', 'value' => $websiteLink],
        ['label' => 'Submitted At', 'value' => $safeCurrentDateTime],
    ],
    'steps_title' => 'What Happens Next',
    'steps' => [
        ['icon' => '1', 'title' => 'Our team reviews your enquiry', 'text' => 'We will go through your requirements carefully and understand your business goals in detail.'],
        ['icon' => '2', 'title' => 'You get a response shortly', 'text' => 'A Technofra advisor will contact you soon to discuss the best digital marketing plan for your business.'],
    ],
    'footer_title' => 'Quick Actions',
    'footer_links' => [
        ['label' => 'Reply to Team', 'href' => 'mailto:support@technofra.com'],
        ['label' => 'Visit Website', 'href' => 'https://technofra.com/'],
        ['label' => 'Call Us', 'href' => 'tel:+918080803374'],
    ],
    'footer_note' => 'If you have any questions before we connect, simply reply to this email and our team will assist you.',
    'preheader_date' => $safeCurrentDateTime,
    'closing_html' => '<div style="margin-bottom:10px;">Team Technofra</div>',
]);
// kcdi vqko dwgv yaku- app password
// Admin Email Setup
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'support@technofra.com';
$mail->Password = 'kcdi vqko dwgv yaku';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('support@technofra.com', 'Technofra');
$mail->addAddress('support@technofra.com');
$mail->isHTML(true);
$mail->Subject = 'Received an inquiry from the Technofra website contact page (' . $currentDateTime . ')';
$mail->Body = $htmlbody;

// Send Admin Email
if (!$mail->send()) {
    header('Location: failed.php');
    exit;
}

// Client Email Setup
$client_mail = new PHPMailer();
$client_mail->IsSMTP();
$client_mail->Host = 'smtp.gmail.com';
$client_mail->SMTPAuth = true;
$client_mail->Username = 'support@technofra.com';
$client_mail->Password = 'kcdi vqko dwgv yaku';
$client_mail->SMTPSecure = 'tls';
$client_mail->Port = 587;

$client_mail->setFrom('support@technofra.com', 'Technofra');
$client_mail->addAddress($email);
$client_mail->isHTML(true);
$client_mail->Subject = 'Thank You for Your Enquiry – Technofra Team (' . $currentDateTime . ')'; 
$client_mail->Body = $client_htmlbody;

// Send Client Email
if (!$client_mail->send()) {
    header('Location: failed.php');
    exit;
}

header('Location: success.php');
