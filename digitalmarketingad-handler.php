<?php

session_start();
date_default_timezone_set('Asia/Kolkata');

function redirectDigitalMarketingForm($status, $title, $message, array $formData = null)
{
    $_SESSION['digital_marketing_form_notice'] = [
        'status' => $status,
        'title' => $title,
        'message' => $message,
    ];

    $_SESSION['digital_marketing_form_data'] = $formData ?? [
        'name' => '',
        'contact' => '',
        'email' => '',
        'company' => '',
        'website' => '',
    ];

    header('Location: digitalmarketingad.php#contact');
    exit;
}

function renderDigitalMarketingEmailInfoRow($label, $value)
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

    $summaryHtml = '';
    foreach ($summaryRows as $row) {
        $summaryHtml .= renderDigitalMarketingEmailInfoRow($row['label'], $row['value']);
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
                    <img src="https://technofra.com/assets/image/technofra14-tem.png" alt="Technofra" style="width:180px;height:auto;display:block;">
                </div>
                <h1 style="margin:0 0 24px;font-size:24px;line-height:1.25;color:#3f4348;font-weight:700;">' . $headline . '</h1>
                <div style="margin:0;font-size:16px;line-height:1.7;color:#60656b;">' . $lead . '</div>
                ' . $introHtml . '
                <a href="' . $ctaHref . '" style="display:inline-block;margin-top:28px;background:' . $accentColor . ';color:#ffffff;text-decoration:none;padding:16px 34px;font-size:14px;line-height:1;box-shadow:0 1px 3px rgba(0,0,0,0.12);">' . $ctaLabel . '</a>
            </div>
            <div style="margin:48px 80px 40px;border:1px solid rgba(0,51,102,0.35);padding:34px 30px 26px;">
                <h2 style="margin:0 0 24px;font-size:18px;font-weight:700;color:#3f4348;">' . $summaryTitle . '</h2>
                <table role="presentation" style="width:100%;border-collapse:collapse;margin-bottom:26px;">
                    ' . $summaryHtml . '
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

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirectDigitalMarketingForm('error', 'Invalid Request', 'Please submit the form properly.');
}

$configPath = __DIR__ . '/book-call-config.php';
if (!file_exists($configPath)) {
    redirectDigitalMarketingForm('error', 'Configuration Missing', 'Required configuration file was not found.');
}

$config = require $configPath;
$db = $config['db'] ?? [];
$mailConfig = $config['mail'] ?? [];

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$contact = preg_replace('/\D+/', '', $_POST['contact'] ?? '');
$company = trim($_POST['company'] ?? '');
$website = trim($_POST['website'] ?? '');
$hiddenField = trim($_POST['hidden_field'] ?? '');

if ($website !== '' && !preg_match('~^https?://~i', $website)) {
    $website = 'https://' . $website;
}

$formData = [
    'name' => $name,
    'contact' => $contact,
    'email' => $email,
    'company' => $company,
    'website' => $website,
];

$errors = [];

if ($hiddenField !== '') {
    $errors[] = 'Invalid submission detected.';
}

if ($name === '') {
    $errors[] = 'Please enter your full name.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if ($contact === '' || strlen(trim($contact)) === 0) {
    $errors[] = 'Please enter a valid phone number.';
}

if ($website !== '' && !filter_var($website, FILTER_VALIDATE_URL)) {
    $errors[] = 'Please enter a valid website URL.';
}

if (!empty($errors)) {
    redirectDigitalMarketingForm('error', 'Submission Failed', implode(' ', $errors), $formData);
}

mysqli_report(MYSQLI_REPORT_OFF);

$dbHost = trim((string) ($db['host'] ?? 'localhost'));
$dbPort = (int) ($db['port'] ?? 3306);
$dbUser = (string) ($db['username'] ?? 'root');
$dbPass = (string) ($db['password'] ?? '');
$dbName = (string) ($db['database'] ?? '');

$hostCandidates = array_values(array_unique(array_filter([
    $dbHost,
    $dbHost === '127.0.0.1' ? 'localhost' : null,
    $dbHost === 'localhost' ? '127.0.0.1' : null,
])));

$mysqli = null;
$lastConnectError = '';

foreach ($hostCandidates as $hostCandidate) {
    $connection = @new mysqli($hostCandidate, $dbUser, $dbPass, $dbName, $dbPort);

    if (!$connection->connect_errno) {
        $mysqli = $connection;
        break;
    }

    $lastConnectError = sprintf(
        '[%s:%d] (%d) %s',
        $hostCandidate,
        $dbPort,
        $connection->connect_errno,
        $connection->connect_error
    );
}

if (!$mysqli instanceof mysqli) {
    error_log('Digital marketing form DB connection failed: ' . $lastConnectError);
    redirectDigitalMarketingForm('error', 'Database Error', 'Database connection failed. Please check book-call-config.php.', $formData);
}

$mysqli->set_charset('utf8mb4');

$createTableSql = "CREATE TABLE IF NOT EXISTS digital_marketing_leads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(25) NOT NULL,
    company VARCHAR(150) NOT NULL DEFAULT '',
    website VARCHAR(255) NOT NULL DEFAULT '',
    source_page VARCHAR(120) NOT NULL DEFAULT 'digitalmarketingad.php',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if (!$mysqli->query($createTableSql)) {
    $mysqli->close();
    redirectDigitalMarketingForm('error', 'Database Error', 'Could not prepare the lead storage table.', $formData);
}

$insert = $mysqli->prepare(
    'INSERT INTO digital_marketing_leads (name, email, phone, company, website, source_page) VALUES (?, ?, ?, ?, ?, ?)'
);

if (!$insert) {
    $mysqli->close();
    redirectDigitalMarketingForm('error', 'Database Error', 'Could not prepare the lead save query.', $formData);
}

$sourcePage = 'digitalmarketingad.php';
$insert->bind_param('ssssss', $name, $email, $contact, $company, $website, $sourcePage);

if (!$insert->execute()) {
    $insert->close();
    $mysqli->close();
    redirectDigitalMarketingForm('error', 'Database Error', 'Lead data could not be saved right now. Please try again.', $formData);
}

$insert->close();
$mysqli->close();

$formattedDateTime = date('d M Y h:i A');
$smtpReady = !empty($mailConfig['host']) && !empty($mailConfig['username']) && !empty($mailConfig['password']);
$mailProblem = false;

if ($smtpReady) {
    require_once __DIR__ . '/PHPMailer/PHPMailerAutoload.php';
    require_once __DIR__ . '/PHPMailer/class.phpmailer.php';
    require_once __DIR__ . '/PHPMailer/class.smtp.php';

    $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safeContact = htmlspecialchars($contact, ENT_QUOTES, 'UTF-8');
    $safeCompany = htmlspecialchars($company !== '' ? $company : 'Not provided', ENT_QUOTES, 'UTF-8');
    $safeWebsite = htmlspecialchars($website !== '' ? $website : 'Not provided', ENT_QUOTES, 'UTF-8');
    $safeCurrentDateTime = htmlspecialchars($formattedDateTime, ENT_QUOTES, 'UTF-8');
    $emailLink = '<a href="mailto:' . $safeEmail . '" style="color:#2563eb;text-decoration:underline;">' . $safeEmail . '</a>';
    $websiteLink = $website !== ''
        ? '<a href="' . htmlspecialchars($website, ENT_QUOTES, 'UTF-8') . '" style="color:#2563eb;text-decoration:underline;">' . $safeWebsite . '</a>'
        : $safeWebsite;

    $adminBody = renderDigitalMarketingEmail([
        'preheader' => 'New website enquiry received.',
        'headline' => 'New Digital Marketing Enquiry',
        'lead' => 'A new enquiry has just been submitted. Below is the complete lead summary captured from the website form.',
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
            ['label' => 'Source Page', 'value' => 'Digital Marketing Ad Page'],
        ],
        'steps_title' => 'Recommended Next Steps',
        'steps' => [
            ['icon' => '1', 'title' => 'Review the client details', 'text' => 'Verify the submitted business information and understand the enquiry before outreach.'],
            ['icon' => '2', 'title' => 'Prepare for the discussion', 'text' => 'Check the website and company details so the first call starts with the right context.'],
        ],
        'footer_title' => 'Quick Actions',
        'footer_links' => [
            ['label' => 'Reply to Client', 'href' => 'mailto:' . $email],
            ['label' => 'Visit Website', 'href' => $website !== '' ? $website : 'https://technofra.com/'],
            ['label' => 'Support Team', 'href' => 'mailto:' . ($mailConfig['from_email'] ?? 'support@technofra.com')],
        ],
        'footer_note' => 'This notification was generated automatically after a successful enquiry submission on the Technofra website.',
        'preheader_date' => $safeCurrentDateTime,
        'closing_html' => '<div style="margin-bottom:10px;">Technofra Digital Marketing Team</div>',
    ]);

    $clientBody = renderDigitalMarketingEmail([
        'preheader' => 'Your enquiry has been submitted successfully.',
        'headline' => 'Thank You for Contacting Technofra',
        'lead' => 'Thanks for reaching out! Our team is already reviewing your request, and one of our experts will connect with you shortly.',
        'intro_html' => '<p style="margin:18px 0 0;font-size:14px;line-height:1.8;color:#60656b;">Hi ' . $safeName . ', we have received your request for a free strategy call.</p>',
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
            ['icon' => '1', 'title' => 'Our team reviews your enquiry', 'text' => 'We check your submitted information and understand your business goals carefully.'],
            ['icon' => '2', 'title' => 'You hear back from us shortly', 'text' => 'A Technofra advisor will contact you to discuss the best digital marketing plan for your business.'],
        ],
        'footer_title' => 'Quick Actions',
        'footer_links' => [
            ['label' => 'Reply to Team', 'href' => 'mailto:' . ($mailConfig['from_email'] ?? 'support@technofra.com')],
            ['label' => 'Visit Website', 'href' => 'https://technofra.com/'],
            ['label' => 'Call Us', 'href' => 'tel:+918080803374'],
        ],
        'footer_note' => 'If you have any questions before we connect, simply reply to this email and our team will assist you.',
        'preheader_date' => $safeCurrentDateTime,
        'closing_html' => '<div style="margin-bottom:10px;">Team Technofra</div>',
    ]);

    $adminMailer = new PHPMailer();
    $adminMailer->isSMTP();
    $adminMailer->Host = $mailConfig['host'];
    $adminMailer->SMTPAuth = true;
    $adminMailer->Username = $mailConfig['username'];
    $adminMailer->Password = $mailConfig['password'];
    $adminMailer->SMTPSecure = $mailConfig['encryption'] ?? 'tls';
    $adminMailer->Port = (int) ($mailConfig['port'] ?? 587);
    $adminMailer->setFrom($mailConfig['from_email'], $mailConfig['from_name']);
    $adminMailer->addAddress($mailConfig['admin_email'], $mailConfig['admin_name'] ?? 'Admin');
    $adminMailer->addReplyTo($email, $name);
    $adminMailer->isHTML(true);
    $adminMailer->Subject = 'New enquiry from Digital Marketing Ads page';
    $adminMailer->Body = $adminBody;

    $clientMailer = new PHPMailer();
    $clientMailer->isSMTP();
    $clientMailer->Host = $mailConfig['host'];
    $clientMailer->SMTPAuth = true;
    $clientMailer->Username = $mailConfig['username'];
    $clientMailer->Password = $mailConfig['password'];
    $clientMailer->SMTPSecure = $mailConfig['encryption'] ?? 'tls';
    $clientMailer->Port = (int) ($mailConfig['port'] ?? 587);
    $clientMailer->setFrom($mailConfig['from_email'], $mailConfig['from_name']);
    $clientMailer->addAddress($email, $name);
    $clientMailer->isHTML(true);
    $clientMailer->Subject = 'Thank you for your enquiry - Technofra';
    $clientMailer->Body = $clientBody;

    if (!$adminMailer->send() || !$clientMailer->send()) {
        $mailProblem = true;
    }
} else {
    $mailProblem = true;
}

if ($mailProblem) {
    redirectDigitalMarketingForm(
        'success',
        'Lead Saved Successfully',
        'Your details were saved in our system, but email confirmation could not be sent right now.'
    );
}

redirectDigitalMarketingForm(
    'success',
    'Request Submitted Successfully',
    'Thank you for sharing your details. Our digital marketing team will contact you shortly to schedule your free strategy call.'
);
