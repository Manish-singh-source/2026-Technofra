<?php

ob_start();
@ini_set('display_errors', '0');
error_reporting(E_ALL);

$chatbotSessionPath = __DIR__ . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'sessions';

if (!is_dir($chatbotSessionPath)) {
    @mkdir($chatbotSessionPath, 0775, true);
}

if (is_dir($chatbotSessionPath) && is_writable($chatbotSessionPath)) {
    @session_save_path($chatbotSessionPath);
}

@session_start();

header('Content-Type: application/json; charset=utf-8');

function chatbotRespond($payload, $statusCode = 200)
{
    if (ob_get_length()) {
        ob_clean();
    }

    http_response_code($statusCode);
    echo json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

function chatbotGetJsonInput()
{
    $rawBody = file_get_contents('php://input');

    if (!is_string($rawBody) || trim($rawBody) === '') {
        return [];
    }

    $decoded = json_decode($rawBody, true);

    return is_array($decoded) ? $decoded : [];
}

function chatbotSanitizeText($value, $maxLength = 1000)
{
    $value = trim($value);
    $value = preg_replace('/\s+/', ' ', $value) ?? '';

    if (function_exists('mb_substr')) {
        return mb_substr($value, 0, $maxLength);
    }

    return substr($value, 0, $maxLength);
}

function chatbotEscape($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function chatbotPageLabel($page)
{
    $page = trim($page, "/ \t\n\r\0\x0B");

    if ($page === '' || $page === 'index.php' || $page === 'index') {
        return 'home page';
    }

    $slug = basename($page);
    $slug = preg_replace('/\.php$/i', '', $slug) ?? $slug;
    $label = str_replace(['-', '_'], ' ', $slug);

    return trim($label) !== '' ? $label . ' page' : 'current page';
}

function chatbotStoreRenderedMessage($role, $html)
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        return;
    }

    if (!isset($_SESSION['tf_chatbot_history']) || !is_array($_SESSION['tf_chatbot_history'])) {
        $_SESSION['tf_chatbot_history'] = [];
    }

    $_SESSION['tf_chatbot_history'][] = [
        'role' => $role,
        'html' => $html,
    ];

    if (count($_SESSION['tf_chatbot_history']) > 20) {
        $_SESSION['tf_chatbot_history'] = array_slice($_SESSION['tf_chatbot_history'], -20);
    }
}

function chatbotStoreConversationMessage($role, $text)
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        return;
    }

    if (!isset($_SESSION['tf_chatbot_messages']) || !is_array($_SESSION['tf_chatbot_messages'])) {
        $_SESSION['tf_chatbot_messages'] = [];
    }

    $_SESSION['tf_chatbot_messages'][] = [
        'role' => $role,
        'text' => $text,
    ];

    if (count($_SESSION['tf_chatbot_messages']) > 12) {
        $_SESSION['tf_chatbot_messages'] = array_slice($_SESSION['tf_chatbot_messages'], -12);
    }
}

function chatbotGetConversationMessages()
{
    $messages = $_SESSION['tf_chatbot_messages'] ?? [];

    return is_array($messages) ? $messages : [];
}

function chatbotStoreLeadSnapshot(array $lead)
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        return;
    }

    $_SESSION['tf_chatbot_lead'] = $lead;
}

function chatbotGetLeadSnapshot()
{
    $lead = $_SESSION['tf_chatbot_lead'] ?? [];

    return is_array($lead) ? $lead : [];
}

function chatbotGetLeadQuestionMap()
{
    return [
        'name' => "What's your name?",
        'email' => "What's your email ID?",
        'phone' => "What's your contact number?",
        'requirement' => 'What do you need help with?',
    ];
}

function chatbotGetLeadQuestion($field)
{
    $questions = chatbotGetLeadQuestionMap();

    return $questions[$field] ?? 'Please share your requirement.';
}

function chatbotGetCurrentLeadField(array $lead)
{
    foreach (array_keys(chatbotGetLeadQuestionMap()) as $field) {
        if (trim((string) ($lead[$field] ?? '')) === '') {
            return $field;
        }
    }

    return null;
}

function chatbotPushUserHistoryMessage($text, $storeConversation = false)
{
    $html = nl2br(chatbotEscape($text));
    chatbotStoreRenderedMessage('user', $html);

    if ($storeConversation) {
        chatbotStoreConversationMessage('user', $text);
    }

    return $html;
}

function chatbotPushBotHistoryMessage($text, $storeConversation = false)
{
    $html = chatbotFormatReplyHtml($text);
    chatbotStoreRenderedMessage('bot', $html);

    if ($storeConversation) {
        chatbotStoreConversationMessage('assistant', $text);
    }

    return $html;
}

function chatbotEnsureLeadOpeningHistory()
{
    $history = $_SESSION['tf_chatbot_history'] ?? [];

    if (is_array($history) && !empty($history)) {
        return;
    }

    chatbotPushBotHistoryMessage('Ready to scale? 🚀');

    $currentField = chatbotGetCurrentLeadField(chatbotGetLeadSnapshot());

    if ($currentField !== null) {
        chatbotPushBotHistoryMessage(chatbotGetLeadQuestion($currentField));
    }
}

function chatbotValidateLeadAnswer($field, $value)
{
    $value = chatbotSanitizeText((string) $value, $field === 'requirement' ? 1200 : 150);

    if ($field === 'name') {
        if ($value === '' || strlen($value) < 2 || !preg_match('/[A-Za-z]/', $value)) {
            return [
                'ok' => false,
                'value' => '',
                'message' => 'Please enter your full name.',
            ];
        }

        return [
            'ok' => true,
            'value' => $value,
            'message' => '',
        ];
    }

    if ($field === 'email') {
        if ($value === '' || !filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return [
                'ok' => false,
                'value' => '',
                'message' => 'Please enter a valid email address.',
            ];
        }

        return [
            'ok' => true,
            'value' => $value,
            'message' => '',
        ];
    }

    if ($field === 'phone') {
        if ($value === '' || !preg_match('/^[0-9+\-\s()]{7,20}$/', $value)) {
            return [
                'ok' => false,
                'value' => '',
                'message' => 'Please enter a valid contact number.',
            ];
        }

        return [
            'ok' => true,
            'value' => $value,
            'message' => '',
        ];
    }

    if ($value === '' || strlen($value) < 3) {
        return [
            'ok' => false,
            'value' => '',
            'message' => 'Please briefly share what you need help with.',
        ];
    }

    return [
        'ok' => true,
        'value' => $value,
        'message' => '',
    ];
}

function chatbotHandleLeadCaptureMessage($message, $page)
{
    $lead = chatbotGetLeadSnapshot();
    $currentField = chatbotGetCurrentLeadField($lead);

    if ($currentField === null) {
        return [
            'handled' => false,
        ];
    }

    $storeConversation = $currentField === 'requirement';
    chatbotPushUserHistoryMessage($message, $storeConversation);

    $validation = chatbotValidateLeadAnswer($currentField, $message);

    if (!$validation['ok']) {
        $replyText = $validation['message'] . "\n" . chatbotGetLeadQuestion($currentField);
        $replyHtml = chatbotPushBotHistoryMessage($replyText);

        return [
            'handled' => true,
            'reply_text' => $replyText,
            'reply_html' => $replyHtml,
            'continue_to_ai' => false,
            'user_already_stored' => true,
            'lead' => chatbotGetLeadSnapshot(),
        ];
    }

    $lead[$currentField] = $validation['value'];
    chatbotStoreLeadSnapshot($lead);
    $nextField = chatbotGetCurrentLeadField($lead);

    if ($nextField !== null) {
        $replyText = chatbotGetLeadQuestion($nextField);
        $replyHtml = chatbotPushBotHistoryMessage($replyText);

        return [
            'handled' => true,
            'reply_text' => $replyText,
            'reply_html' => $replyHtml,
            'continue_to_ai' => false,
            'user_already_stored' => true,
            'lead' => $lead,
        ];
    }

    $saveResult = chatbotPersistLead($lead, $page, $message);

    if (!$saveResult['ok']) {
        $replyText = $saveResult['message'];
        $replyHtml = chatbotPushBotHistoryMessage($replyText);

        return [
            'handled' => true,
            'reply_text' => $replyText,
            'reply_html' => $replyHtml,
            'continue_to_ai' => false,
            'user_already_stored' => true,
            'lead' => chatbotGetLeadSnapshot(),
        ];
    }

    return [
        'handled' => true,
        'reply_text' => '',
        'reply_html' => '',
        'continue_to_ai' => true,
        'ack_text' => 'Thanks ' . $lead['name'] . ', your details have been saved. Let me help you with that.',
        'user_already_stored' => true,
        'lead' => chatbotGetLeadSnapshot(),
    ];
}

function chatbotGetSessionToken()
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        $existing = $_SESSION['tf_chatbot_session_token'] ?? '';

        if (is_string($existing) && trim($existing) !== '') {
            return trim($existing);
        }

        $sessionId = session_id();
        $token = is_string($sessionId) && trim($sessionId) !== '' ? trim($sessionId) : '';

        if ($token === '') {
            try {
                $token = bin2hex(random_bytes(16));
            } catch (Exception $exception) {
                $token = uniqid('tf-chat-', true);
            }
        }

        $_SESSION['tf_chatbot_session_token'] = $token;

        return $token;
    }

    try {
        return bin2hex(random_bytes(16));
    } catch (Exception $exception) {
        return uniqid('tf-chat-', true);
    }
}

function chatbotHasAnyLeadField(array $lead)
{
    foreach (['name', 'email', 'phone', 'requirement'] as $field) {
        if (trim((string) ($lead[$field] ?? '')) !== '') {
            return true;
        }
    }

    return false;
}

function chatbotGetLatestUserMessage()
{
    $messages = chatbotGetConversationMessages();

    for ($index = count($messages) - 1; $index >= 0; $index--) {
        $entry = $messages[$index];

        if (!is_array($entry) || ($entry['role'] ?? '') !== 'user') {
            continue;
        }

        $text = chatbotSanitizeText((string) ($entry['text'] ?? ''), 1200);

        if ($text !== '') {
            return $text;
        }
    }

    return '';
}

function chatbotBuildConversationExcerpt($latestUserMessage = '')
{
    $lines = [];

    foreach (chatbotGetConversationMessages() as $entry) {
        if (!is_array($entry) || !isset($entry['role'], $entry['text'])) {
            continue;
        }

        $role = $entry['role'] === 'assistant' ? 'Assistant' : 'Visitor';
        $text = chatbotSanitizeText((string) $entry['text'], 600);

        if ($text === '') {
            continue;
        }

        $lines[] = $role . ': ' . $text;
    }

    $latestUserMessage = chatbotSanitizeText((string) $latestUserMessage, 600);

    if ($latestUserMessage !== '') {
        $lastLine = end($lines);

        if (!is_string($lastLine) || $lastLine !== 'Visitor: ' . $latestUserMessage) {
            $lines[] = 'Visitor: ' . $latestUserMessage;
        }
    }

    if (count($lines) > 10) {
        $lines = array_slice($lines, -10);
    }

    return chatbotSanitizeText(implode("\n", $lines), 5000);
}

function chatbotFormatReplyHtml($text)
{
    $text = trim($text);

    if ($text === '') {
        return 'Sorry, I could not generate a reply right now.';
    }

    $replacements = [];

    $text = preg_replace_callback(
        '/\[\[([^\]|]+)\|([^\]]+)\]\]/',
        function ($matches) use (&$replacements) {
            $label = trim((string) $matches[1]);
            $url = trim((string) $matches[2]);
            $token = '%%CHATBOT_LINK_' . count($replacements) . '%%';

            $replacements[$token] = chatbotBuildAnchorTag($url, $label);

            return $token;
        },
        $text
    ) ?? $text;

    $text = preg_replace_callback(
        '~(https?://[^\s<]+?)([.,!?)]?)(?=\s|$)~i',
        function ($matches) use (&$replacements) {
            $url = trim((string) $matches[1]);
            $suffix = $matches[2] ?? '';
            $token = '%%CHATBOT_URL_' . count($replacements) . '%%';

            $replacements[$token] = chatbotBuildAnchorTag($url, chatbotGetUrlLabel($url)) . chatbotEscape($suffix);

            return $token;
        },
        $text
    ) ?? $text;

    $escaped = chatbotEscape($text);

    if (!empty($replacements)) {
        $escaped = strtr($escaped, $replacements);
    }

    return nl2br($escaped);
}

function chatbotNormalizeUrl($url)
{
    return rtrim(trim((string) $url), '/');
}

function chatbotBuildAnchorTag($url, $label)
{
    $safeUrl = chatbotEscape($url);
    $safeLabel = chatbotEscape($label !== '' ? $label : 'Learn more');

    return '<a href="' . $safeUrl . '" target="_blank" rel="noopener noreferrer">' . $safeLabel . '</a>';
}

function chatbotGetUrlLabel($url)
{
    $normalized = chatbotNormalizeUrl($url);
    $knownLabels = [
        'https://technofra.com/contact' => 'Contact Page',
        'https://technofra.com/book-a-call' => 'Book a Call',
        'https://technofra.com/web-design' => 'Website Services',
        'https://technofra.com/android-app-development' => 'App Development',
        'https://technofra.com/branding' => 'Branding Services',
        'https://technofra.com/digital-marketing' => 'Digital Marketing',
        'https://technofra.com/payment-gateway' => 'Payment Gateway Solutions',
        'https://technofra.com/chatbot' => 'Chatbot Solutions',
        'https://technofra.com/whatsapp' => 'WhatsApp Solutions',
        'https://technofra.com/career' => 'Career Opportunities',
        'https://technofra.com/sms-otp' => 'SMS / OTP Solutions',
        'https://technofra.com/google-forms' => 'Google Forms Integration',
        'https://technofra.com/domain-hosting-services' => 'Domain & Hosting',
        'https://technofra.com/portfolio' => 'Portfolio',
        'https://wa.me/918080721003' => 'WhatsApp',
    ];

    if (isset($knownLabels[$normalized])) {
        return $knownLabels[$normalized];
    }

    $path = parse_url($normalized, PHP_URL_PATH);

    if (is_string($path) && trim($path, '/') !== '') {
        $slug = basename($path);
        $slug = preg_replace('/\.php$/i', '', $slug) ?? $slug;
        $slug = str_replace(['-', '_'], ' ', $slug);
        $slug = trim($slug);

        if ($slug !== '') {
            return ucwords($slug);
        }
    }

    return 'Learn more';
}

function chatbotKeywordMatch($text, $keywords)
{
    foreach ($keywords as $keyword) {
        if (strpos($text, $keyword) !== false) {
            return true;
        }
    }

    return false;
}

function chatbotGetServiceCatalog()
{
    return [
        'Website Development' => 'https://technofra.com/web-design',
        'App Development' => 'https://technofra.com/android-app-development',
        'Branding & UI/UX' => 'https://technofra.com/branding',
        'Digital Marketing & SEO' => 'https://technofra.com/digital-marketing',
        'Social Media Marketing' => 'https://technofra.com/social-media-marketing',
        'Payment Gateway Integration' => 'https://technofra.com/payment-gateway',
        'Chatbot Solutions' => 'https://technofra.com/chatbot',
        'WhatsApp Solutions' => 'https://technofra.com/whatsapp',
        'SMS / OTP Solutions' => 'https://technofra.com/sms-otp',
        'Google Forms Integration' => 'https://technofra.com/google-forms',
        'Domain & Hosting' => 'https://technofra.com/domain-hosting-services',
    ];
}

function chatbotGetGeneralResourceCatalog()
{
    return [
        'Career Opportunities' => 'https://technofra.com/career',
        'Portfolio' => 'https://technofra.com/portfolio',
        'Contact Page' => 'https://technofra.com/contact',
        'Book a Call' => 'https://technofra.com/book-a-call',
    ];
}

function chatbotBuildServiceListReply()
{
    $lines = [
        'Technofra provides the following core services:',
    ];

    foreach (chatbotGetServiceCatalog() as $label => $url) {
        $lines[] = '- ' . $label . ': [[' . $label . '|' . $url . ']]';
    }

    $lines[] = 'If you want, tell me your exact requirement and I will suggest the most suitable service for you.';

    return implode("\n", $lines);
}

function chatbotBuildFallbackReply($message, $pageLabel, $allowGeneric = true)
{
    $normalized = function_exists('mb_strtolower') ? mb_strtolower($message, 'UTF-8') : strtolower($message);

    $isGreeting = chatbotKeywordMatch($normalized, ['hi', 'hello', 'hey', 'namaste', 'hii', 'helo']);
    $isServicesQuery = chatbotKeywordMatch($normalized, [
        'services',
        'service',
        'konsi service',
        'kon si service',
        'kaunsi service',
        'kya service',
        'kya kya karte',
        'what services',
        'what do you do',
        'what do you provide',
        'provide',
        'offer',
        'konsi konsi',
        'kaun kaun si',
        'kya kya',
    ]);
    $isWebsite = chatbotKeywordMatch($normalized, [
        'website',
        'web design',
        'web development',
        'wordpress',
        'shopify',
        'landing page',
        'website banani',
        'website banana',
        'site banana',
        'site design',
    ]);
    $isApp = chatbotKeywordMatch($normalized, [
        'app',
        'android',
        'ios',
        'mobile app',
        'application',
        'app development',
    ]);
    $isBranding = chatbotKeywordMatch($normalized, [
        'branding',
        'logo',
        'brand',
        'ui',
        'ux',
        'design',
        'brand identity',
        'creative',
    ]);
    $isMarketing = chatbotKeywordMatch($normalized, [
        'seo',
        'marketing',
        'social media',
        'ppc',
        'ads',
        'google',
        'lead generation',
        'promotion',
        'digital marketing',
    ]);
    $isPayment = chatbotKeywordMatch($normalized, [
        'payment',
        'gateway',
        'razorpay',
        'payu',
        'upi',
        'integration',
        'payment gateway',
    ]);
    $isWhatsApp = chatbotKeywordMatch($normalized, ['whatsapp', 'wa bot', 'whatsapp api']);
    $isChatbot = chatbotKeywordMatch($normalized, ['chatbot', 'bot', 'automation']);
    $isPricing = chatbotKeywordMatch($normalized, ['price', 'pricing', 'cost', 'budget', 'quote', 'package', 'kitna', 'charges', 'rate']);
    $isSupport = chatbotKeywordMatch($normalized, ['help', 'support', 'issue', 'problem', 'assist', 'solve']);
    $isContact = chatbotKeywordMatch($normalized, ['call', 'phone', 'email', 'contact', 'callback', 'talk', 'number', 'contact no', 'phone no']);
    $isPortfolio = chatbotKeywordMatch($normalized, ['portfolio', 'work', 'projects', 'case studies', 'samples']);
    $isCareer = chatbotKeywordMatch($normalized, ['career', 'careers', 'job', 'jobs', 'opening', 'openings', 'vacancy', 'vacancies', 'hiring', 'recruitment']);
    $isInternship = chatbotKeywordMatch($normalized, ['internship', 'intern', 'trainee', 'fresher job', 'fresher opening']);
    $isCareerApply = chatbotKeywordMatch($normalized, ['apply', 'application', 'resume', 'cv', 'how to apply', 'apply kaise', 'apply kaise kare', 'send cv']);
    $isCareerSalary = chatbotKeywordMatch($normalized, ['salary', 'package', 'ctc', 'stipend', 'pay scale', 'kitni salary']);
    $isApi = chatbotKeywordMatch($normalized, [' api', 'Api', 'api ', 'api?', 'apis', 'integration api', 'rest api', 'developer api', 'business api', 'What type api', 'API']);
    $isCompanyInfo = chatbotKeywordMatch($normalized, ['about', 'company', 'who are you', 'technofra kya hai', 'about technofra']);
    $isLocation = chatbotKeywordMatch($normalized, ['address', 'location', 'office', 'where are you', 'kaha ho', 'kahan ho']);
    $isHosting = chatbotKeywordMatch($normalized, ['domain', 'hosting', 'server', 'ssl']);
    $isForms = chatbotKeywordMatch($normalized, ['google form', 'forms', 'email form', 'form integration']);
    $isSmsOtp = chatbotKeywordMatch($normalized, ['sms', 'otp', 'verification', 'authentication']);
    $isTimelineQuery = chatbotKeywordMatch($normalized, ['time', 'timeline', 'duration', 'how long', 'kitne din', 'kitna time', 'kab tak', 'delivery time']);
    $isDocumentQuery = chatbotKeywordMatch($normalized, ['documents', 'document', 'doc', 'kyc', 'requirements', 'requirement', 'kya chahiye', 'papers']);
    $isResultsQuery = chatbotKeywordMatch($normalized, ['results', 'result', 'ranking', 'rank', 'kab tak', 'how soon', 'kitne time', 'kitna time']);
    $isWhatsAppApiPricing = $isWhatsApp && ($isPricing || chatbotKeywordMatch($normalized, ['conversation price', 'per message', 'whatsapp api cost', 'whatsapp api charges']));
    $isSmsOtpPricing = $isSmsOtp && ($isPricing || chatbotKeywordMatch($normalized, ['per sms', 'otp cost', 'sms api cost', 'sms charges']));
    $isApiPricing = $isApi && $isPricing;
    $isWebsiteTimeline = $isWebsite && $isTimelineQuery;
    $isAppPricing = $isApp && $isPricing;
    $isSeoTiming = $isMarketing && $isResultsQuery;
    $isPaymentDocuments = $isPayment && $isDocumentQuery;

    if ($isGreeting) {
        return 'Hello, and welcome to Technofra.' . "\n" . 'Please share your requirement, and I will guide you with the most relevant next step.';
    }

    if ($isInternship) {
        return 'Yes, if internship or trainee roles are available, they will be listed on our [[Career Opportunities|https://technofra.com/career]] page.' . "\n" . 'You can review openings there, and if needed, I can also guide you on the application process.';
    }

    if ($isCareer && $isCareerApply) {
        return 'You can apply for relevant roles through our [[Career Opportunities|https://technofra.com/career]] page.' . "\n" . 'Please keep your updated resume ready, and if you need direct assistance, you may also use our [[Contact Page|https://technofra.com/contact]].';
    }

    if ($isCareer && $isCareerSalary) {
        return 'Compensation, salary, or stipend details usually depend on the role, experience level, and current opening.' . "\n" . 'The best next step is to review the role on our [[Career Opportunities|https://technofra.com/career]] page and then connect with our team through the [[Contact Page|https://technofra.com/contact]].';
    }

    if ($isServicesQuery) {
        return chatbotBuildServiceListReply();
    }

    if ($isWhatsAppApiPricing) {
        return 'WhatsApp API pricing depends on the use case, conversation type, messaging volume, and implementation scope.' . "\n" . 'Please review our [[WhatsApp Solutions|https://technofra.com/whatsapp]] page, and for an exact estimate you can use [[Book a Call|https://technofra.com/book-a-call]].';
    }

    if ($isSmsOtpPricing) {
        return 'SMS and OTP pricing usually depends on message volume, delivery region, sender setup, and integration requirements.' . "\n" . 'Please review our [[SMS / OTP Solutions|https://technofra.com/sms-otp]] page, and for an accurate quote you can connect through [[Contact Page|https://technofra.com/contact]].';
    }

    if ($isApiPricing) {
        return 'API integration pricing depends on the specific platform, workflow complexity, security requirements, and support scope.' . "\n" . 'If you share the exact API requirement, I can point you to the right service, or you can connect through our [[Contact Page|https://technofra.com/contact]].';
    }

    if ($isWebsiteTimeline) {
        return 'Website delivery time depends on the scope, number of pages, design approvals, and required integrations.' . "\n" . 'In most cases, a standard business website can be planned faster than a custom or e-commerce build. Please share your requirement through our [[Website Services|https://technofra.com/web-design]] page or [[Book a Call|https://technofra.com/book-a-call]] for a realistic timeline.';
    }

    if ($isAppPricing) {
        return 'Android or iOS app pricing depends on the feature set, design scope, admin panel needs, and third-party integrations.' . "\n" . 'For a reliable estimate, please share your app requirement through our [[App Development|https://technofra.com/android-app-development]] page or our [[Contact Page|https://technofra.com/contact]].';
    }

    if ($isSeoTiming) {
        return 'SEO results usually depend on the current website condition, competition level, target keywords, and content strategy.' . "\n" . 'It is best treated as a structured growth process rather than an instant result service. You can review our [[Digital Marketing|https://technofra.com/digital-marketing]] offering or use [[Book a Call|https://technofra.com/book-a-call]] for a proper discussion.';
    }

    if ($isPaymentDocuments) {
        return 'Payment gateway setup usually requires business and KYC-related details such as company or personal identity information, bank details, website or app information, and compliance documents depending on the provider.' . "\n" . 'For provider-specific guidance, please review our [[Payment Gateway Solutions|https://technofra.com/payment-gateway]] page or connect via our [[Contact Page|https://technofra.com/contact]].';
    }

    if ($isWebsite) {
        return 'We can certainly help with website design, WordPress, Shopify, and custom business websites.' . "\n" . 'Please review our [[Website Services|https://technofra.com/web-design]] page, or share your requirement and I will suggest the right solution.';
    }

    if ($isApp) {
        return 'Our team develops Android and iOS applications for startups, businesses, and enterprise use cases.' . "\n" . 'You can explore our [[App Development|https://technofra.com/android-app-development]] services for more details.';
    }

    if ($isBranding) {
        return 'Yes, we also provide branding, UI/UX, logo systems, and digital experience design support.' . "\n" . 'Please have a look at our [[Branding Services|https://technofra.com/branding]] page.';
    }

    if ($isMarketing) {
        return 'We support SEO, social media marketing, content marketing, and paid performance campaigns.' . "\n" . 'You may review our [[Digital Marketing|https://technofra.com/digital-marketing]] services for a detailed overview.';
    }

    if ($isPayment) {
        return 'Yes, we provide secure payment gateway integrations for websites and applications.' . "\n" . 'Please review our [[Payment Gateway Solutions|https://technofra.com/payment-gateway]] page for more information.';
    }

    if ($isWhatsApp) {
        return 'Yes, we provide WhatsApp API and business automation solutions for customer engagement, notifications, and support workflows.' . "\n" . 'You can review our [[WhatsApp Solutions|https://technofra.com/whatsapp]] page for more details.';
    }

    if ($isChatbot) {
        return 'Yes, we can set up website chatbots, WhatsApp automation, and customer support workflows.' . "\n" . 'You can explore our [[Chatbot Solutions|https://technofra.com/chatbot]] page for relevant use cases.';
    }

    if ($isPricing) {
        return 'Pricing depends on the project scope, features, and delivery timeline.' . "\n" . 'If you share your requirement through our [[Contact Page|https://technofra.com/contact]], our team can prepare a suitable estimate.';
    }

    if ($isContact) {
        return 'You can connect with our team on +91 8080 80 3374 or +91 8080 80 3375.' . "\n" . 'You may also use our [[Contact Page|https://technofra.com/contact]], schedule a discussion via [[Book a Call|https://technofra.com/book-a-call]], or message us on [[WhatsApp|https://wa.me/918080721003]].';
    }

    if ($isSupport) {
        return 'I am here to assist you.' . "\n" . 'Please share your requirement, business goal, or issue in one line so I can guide you more precisely.';
    }

    if ($isPortfolio) {
        return 'Yes, you can review our recent work and portfolio examples here: [[Portfolio|https://technofra.com/portfolio]].' . "\n" . 'If you share your industry or requirement, I can also suggest the most relevant service category.';
    }

    if ($isCareer) {
        return 'You can explore current career opportunities and job-related details on our [[Career Opportunities|https://technofra.com/career]] page.' . "\n" . 'If you want, I can also help you with the application or contact process.';
    }

    if ($isApi) {
        return 'Yes, we support API-based integrations for websites and applications, including payment gateway, WhatsApp, SMS / OTP, and other business workflow integrations.' . "\n" . 'Relevant pages: [[WhatsApp Solutions|https://technofra.com/whatsapp]], [[SMS / OTP Solutions|https://technofra.com/sms-otp]], and [[Payment Gateway Solutions|https://technofra.com/payment-gateway]].';
    }

    if ($isCompanyInfo) {
        return 'Technofra is a digital solutions company that helps businesses with website development, app development, branding, marketing, payment integrations, automation, and support solutions.' . "\n" . 'If you would like, I can also list our core services for you.';
    }

    if ($isLocation) {
        return 'Our office is located at Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai - 400067, Maharashtra, India.' . "\n" . 'For direct discussion, you may also use our [[Contact Page|https://technofra.com/contact]].';
    }

    if ($isHosting) {
        return 'Yes, we also provide domain registration, hosting, SSL, and related setup support.' . "\n" . 'Please review our [[Domain & Hosting|https://technofra.com/domain-hosting-services]] page for details.';
    }

    if ($isForms) {
        return 'We can help with Google Forms, email forms, and business form integrations.' . "\n" . 'Relevant pages: [[Google Forms Integration|https://technofra.com/google-forms]] and [[Email Form Solutions|https://technofra.com/email-form]].';
    }

    if ($isSmsOtp) {
        return 'Yes, we provide SMS and OTP based verification solutions for websites and applications.' . "\n" . 'Please review our [[SMS / OTP Solutions|https://technofra.com/sms-otp]] page.';
    }

    if (!$allowGeneric) {
        return '';
    }

    return 'Thank you for your message. You are currently browsing our ' . $pageLabel . '.' . "\n" . 'Please let me know whether you need website development, app development, branding, marketing, payment integration, or chatbot support.';
}

function chatbotLooksGenericReply($text)
{
    $normalized = function_exists('mb_strtolower') ? mb_strtolower($text, 'UTF-8') : strtolower($text);

    return chatbotKeywordMatch($normalized, [
        'you are currently browsing our',
        'please let me know whether you need',
        'thank you for your message',
        'our team will get back to you shortly',
    ]);
}

function chatbotGetLocalConfig()
{
    static $config = null;

    if ($config !== null) {
        return $config;
    }

    $config = [];
    $configPath = __DIR__ . DIRECTORY_SEPARATOR . 'chatbot-config.php';

    if (is_file($configPath)) {
        $loaded = include $configPath;

        if (is_array($loaded)) {
            $config = $loaded;
        }
    }

    return $config;
}

function chatbotGetOpenAiApiKey()
{
    $config = chatbotGetLocalConfig();
    $sources = [
        $config['openai_api_key'] ?? null,
        getenv('OPENAI_API_KEY'),
        $_ENV['OPENAI_API_KEY'] ?? null,
        $_SERVER['OPENAI_API_KEY'] ?? null,
    ];

    foreach ($sources as $candidate) {
        if (is_string($candidate) && trim($candidate) !== '') {
            return trim($candidate);
        }
    }

    return '';
}

function chatbotGetOpenAiModel()
{
    $config = chatbotGetLocalConfig();
    $model = $config['openai_model'] ?? getenv('OPENAI_CHATBOT_MODEL');

    if (!is_string($model) || trim($model) === '') {
        $model = $_ENV['OPENAI_CHATBOT_MODEL'] ?? $_SERVER['OPENAI_CHATBOT_MODEL'] ?? 'gpt-5.4-mini';
    }

    return trim((string) $model) !== '' ? trim((string) $model) : 'gpt-5.4-mini';
}

function chatbotGetDbConfig()
{
    static $dbConfig = null;

    if ($dbConfig !== null) {
        return $dbConfig;
    }

    $dbConfig = [];
    $config = chatbotGetLocalConfig();

    if (isset($config['db']) && is_array($config['db'])) {
        $dbConfig = $config['db'];

        return $dbConfig;
    }

    $bookCallConfigPath = __DIR__ . DIRECTORY_SEPARATOR . 'book-call-config.php';

    if (is_file($bookCallConfigPath)) {
        $loaded = include $bookCallConfigPath;

        if (is_array($loaded) && isset($loaded['db']) && is_array($loaded['db'])) {
            $dbConfig = $loaded['db'];
        }
    }

    return $dbConfig;
}

function chatbotOpenDatabaseConnection(&$errorMessage = '')
{
    mysqli_report(MYSQLI_REPORT_OFF);

    $db = chatbotGetDbConfig();
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

    $lastConnectError = '';

    foreach ($hostCandidates as $hostCandidate) {
        $connection = @new mysqli($hostCandidate, $dbUser, $dbPass, $dbName, $dbPort);

        if (!$connection->connect_errno) {
            $connection->set_charset('utf8mb4');

            return $connection;
        }

        $lastConnectError = sprintf(
            '[%s:%d] (%d) %s',
            $hostCandidate,
            $dbPort,
            $connection->connect_errno,
            $connection->connect_error
        );
    }

    $errorMessage = $lastConnectError !== '' ? $lastConnectError : 'Missing database configuration.';

    return null;
}

function chatbotPersistLead(array $lead, $page, $latestUserMessage = '')
{
    $name = chatbotSanitizeText((string) ($lead['name'] ?? ''), 150);
    $email = chatbotSanitizeText((string) ($lead['email'] ?? ''), 150);
    $phone = chatbotSanitizeText((string) ($lead['phone'] ?? ''), 25);
    $requirement = chatbotSanitizeText((string) ($lead['requirement'] ?? ''), 1200);
    $sourcePage = chatbotSanitizeText((string) $page, 120);
    $latestUserMessage = chatbotSanitizeText((string) $latestUserMessage, 1200);

    if ($name === '') {
        return [
            'ok' => false,
            'message' => 'Please enter your name before saving chat details.',
        ];
    }

    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return [
            'ok' => false,
            'message' => 'Please enter a valid email address before saving chat details.',
        ];
    }

    if ($phone === '' || !preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {
        return [
            'ok' => false,
            'message' => 'Please enter a valid contact number before saving chat details.',
        ];
    }

    if ($requirement === '') {
        $requirement = $latestUserMessage !== '' ? $latestUserMessage : chatbotGetLatestUserMessage();
    }

    if ($requirement === '') {
        $requirement = 'General enquiry';
    }

    if ($sourcePage === '') {
        $sourcePage = 'index';
    }

    $conversationExcerpt = chatbotBuildConversationExcerpt($latestUserMessage);
    $lastUserMessage = $latestUserMessage !== '' ? $latestUserMessage : chatbotGetLatestUserMessage();
    $sessionToken = chatbotGetSessionToken();
    $dbError = '';
    $mysqli = chatbotOpenDatabaseConnection($dbError);

    if (!$mysqli instanceof mysqli) {
        error_log('Chatbot lead DB connection failed: ' . $dbError);

        return [
            'ok' => false,
            'message' => 'Database connection failed while saving chatbot lead.',
        ];
    }

    $createTableSql = "CREATE TABLE IF NOT EXISTS chatbot_leads (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        session_token VARCHAR(128) NOT NULL,
        name VARCHAR(150) NOT NULL,
        email VARCHAR(150) NOT NULL,
        phone VARCHAR(25) NOT NULL,
        requirement TEXT NOT NULL,
        source_page VARCHAR(120) NOT NULL DEFAULT 'index',
        conversation_excerpt TEXT NOT NULL,
        last_user_message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        UNIQUE KEY unique_session_token (session_token)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

    if (!$mysqli->query($createTableSql)) {
        $mysqli->close();

        return [
            'ok' => false,
            'message' => 'Could not prepare chatbot lead storage in the database.',
        ];
    }

    $select = $mysqli->prepare('SELECT id FROM chatbot_leads WHERE session_token = ? LIMIT 1');

    if (!$select) {
        $mysqli->close();

        return [
            'ok' => false,
            'message' => 'Could not verify the existing chatbot lead.',
        ];
    }

    $select->bind_param('s', $sessionToken);
    $select->execute();
    $select->store_result();
    $hasExistingLead = $select->num_rows > 0;
    $select->close();

    if ($hasExistingLead) {
        $statement = $mysqli->prepare(
            'UPDATE chatbot_leads SET name = ?, email = ?, phone = ?, requirement = ?, source_page = ?, conversation_excerpt = ?, last_user_message = ? WHERE session_token = ?'
        );
    } else {
        $statement = $mysqli->prepare(
            'INSERT INTO chatbot_leads (name, email, phone, requirement, source_page, conversation_excerpt, last_user_message, session_token) VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
        );
    }

    if (!$statement) {
        $mysqli->close();

        return [
            'ok' => false,
            'message' => 'Could not prepare the chatbot lead save query.',
        ];
    }

    $statement->bind_param(
        'ssssssss',
        $name,
        $email,
        $phone,
        $requirement,
        $sourcePage,
        $conversationExcerpt,
        $lastUserMessage,
        $sessionToken
    );

    if (!$statement->execute()) {
        $statement->close();
        $mysqli->close();

        return [
            'ok' => false,
            'message' => 'Chatbot lead data could not be saved right now. Please try again.',
        ];
    }

    $statement->close();
    $mysqli->close();

    $snapshot = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'requirement' => $requirement,
        'source_page' => $sourcePage,
    ];

    chatbotStoreLeadSnapshot($snapshot);

    return [
        'ok' => true,
        'message' => 'Chat details saved successfully. Our team can now follow up in MyCRM.',
        'lead' => $snapshot,
    ];
}

function chatbotRefreshSavedLead($page, $latestUserMessage = '')
{
    $lead = chatbotGetLeadSnapshot();

    if (!chatbotHasAnyLeadField($lead)) {
        return;
    }

    chatbotPersistLead($lead, $page, $latestUserMessage);
}

function chatbotBuildSystemPrompt($pageLabel)
{
    return implode("\n", [
        'You are the live AI website assistant for Technofra, a digital services company.',
        'Current page context: ' . $pageLabel . '.',
        'Technofra services include website development, WordPress, Shopify, mobile app development, branding, UI/UX, SEO, social media marketing, content marketing, payment gateway integration, WhatsApp solutions, chatbot setup, API integrations, domain and hosting, and IT support.',
        'Reply like a polished, professional sales and support assistant for a premium digital agency.',
        'Answer directly based on the user question.',
        'Keep replies concise, practical, confident, and professional.',
        'Avoid casual phrasing, slang, or overly friendly filler.',
        'Understand Hindi, Hinglish, and short informal phrasing from Indian users.',
        'If the user asks for services, list the actual Technofra services clearly instead of giving a generic fallback.',
        'If the user asks for contact number, provide the numbers +91 8080 80 3374 and +91 8080 80 3375.',
        'If the user asks about pricing, explain that pricing depends on scope and recommend contact or book-a-call.',
        'If the user asks about careers, jobs, internships, how to apply, salary, stipend, or openings, answer directly and guide them to Career Opportunities or Contact Page.',
        'If the user asks about WhatsApp API pricing, SMS / OTP pricing, or API integration pricing, answer specifically instead of giving a broad services reply.',
        'If the user asks about website delivery time, app pricing, SEO result timing, or payment gateway document requirements, answer that specific practical question first.',
        'If the user asks something unrelated to Technofra services, still answer briefly and then bring the conversation back to how Technofra can help.',
        'Never claim fake guarantees, fake pricing, or unavailable company details.',
        'Do not use markdown tables.',
        'Do not output raw HTML.',
        'Do not expose raw URLs directly in the visible reply.',
        'If a link is helpful, use this exact format: [[Label|URL]].',
        'Use at most 3 links in one reply.',
        'Available links:',
        '[[Contact Page|https://technofra.com/contact]]',
        '[[Book a Call|https://technofra.com/book-a-call]]',
        '[[Website Services|https://technofra.com/web-design]]',
        '[[App Development|https://technofra.com/android-app-development]]',
        '[[Branding Services|https://technofra.com/branding]]',
        '[[Digital Marketing|https://technofra.com/digital-marketing]]',
        '[[Social Media Marketing|https://technofra.com/social-media-marketing]]',
        '[[Payment Gateway Solutions|https://technofra.com/payment-gateway]]',
        '[[Chatbot Solutions|https://technofra.com/chatbot]]',
        '[[WhatsApp Solutions|https://technofra.com/whatsapp]]',
        '[[SMS / OTP Solutions|https://technofra.com/sms-otp]]',
        '[[Google Forms Integration|https://technofra.com/google-forms]]',
        '[[Email Form Solutions|https://technofra.com/email-form]]',
        '[[Domain & Hosting|https://technofra.com/domain-hosting-services]]',
        '[[Portfolio|https://technofra.com/portfolio]]',
        '[[Career Opportunities|https://technofra.com/career]]',
        '[[WhatsApp|https://wa.me/918080721003]]',
    ]);
}

function chatbotBuildOpenAiInput($message, $pageLabel)
{
    $items = [
        [
            'role' => 'system',
            'content' => [
                [
                    'type' => 'input_text',
                    'text' => chatbotBuildSystemPrompt($pageLabel),
                ],
            ],
        ],
    ];

    foreach (chatbotGetConversationMessages() as $entry) {
        if (!isset($entry['role'], $entry['text'])) {
            continue;
        }

        $role = $entry['role'] === 'assistant' ? 'assistant' : 'user';
        $text = chatbotSanitizeText((string) $entry['text'], 1200);

        if ($text === '') {
            continue;
        }

        $items[] = [
            'role' => $role,
            'content' => [
                [
                    'type' => 'input_text',
                    'text' => $text,
                ],
            ],
        ];
    }

    $items[] = [
        'role' => 'user',
        'content' => [
            [
                'type' => 'input_text',
                'text' => $message,
            ],
        ],
    ];

    return $items;
}

function chatbotExtractOpenAiText(array $responseData)
{
    if (isset($responseData['output']) && is_array($responseData['output'])) {
        $parts = [];

        foreach ($responseData['output'] as $outputItem) {
            if (!is_array($outputItem) || ($outputItem['type'] ?? '') !== 'message') {
                continue;
            }

            foreach (($outputItem['content'] ?? []) as $contentItem) {
                if (!is_array($contentItem)) {
                    continue;
                }

                if (($contentItem['type'] ?? '') === 'output_text' && isset($contentItem['text'])) {
                    $parts[] = (string) $contentItem['text'];
                }
            }
        }

        $joined = trim(implode("\n", $parts));

        if ($joined !== '') {
            return $joined;
        }
    }

    if (isset($responseData['output_text']) && is_string($responseData['output_text'])) {
        return trim($responseData['output_text']);
    }

    return '';
}

function chatbotRequestAiReply($message, $pageLabel)
{
    $apiKey = chatbotGetOpenAiApiKey();

    if ($apiKey === '' || !function_exists('curl_init')) {
        return [
            'ok' => false,
            'text' => '',
        ];
    }

    $payload = [
        'model' => chatbotGetOpenAiModel(),
        'input' => chatbotBuildOpenAiInput($message, $pageLabel),
        'max_output_tokens' => 320,
    ];

    $ch = curl_init('https://api.openai.com/v1/responses');

    if ($ch === false) {
        return [
            'ok' => false,
            'text' => '',
        ];
    }

    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 25,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey,
        ],
        CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
    ]);

    $rawResponse = curl_exec($ch);
    $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);

    if (!is_string($rawResponse) || $rawResponse === '') {
        return [
            'ok' => false,
            'text' => '',
            'error' => $curlError,
        ];
    }

    $decoded = json_decode($rawResponse, true);

    if (!is_array($decoded) || $httpCode >= 400) {
        return [
            'ok' => false,
            'text' => '',
        ];
    }

    $replyText = chatbotExtractOpenAiText($decoded);

    if ($replyText === '') {
        return [
            'ok' => false,
            'text' => '',
        ];
    }

    return [
        'ok' => true,
        'text' => $replyText,
    ];
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    chatbotRespond([
        'success' => false,
        'message' => 'Method not allowed.',
    ], 405);
}

$input = chatbotGetJsonInput();
$action = chatbotSanitizeText((string) ($input['action'] ?? $_POST['action'] ?? 'message'), 20);
chatbotEnsureLeadOpeningHistory();

if ($action === 'history') {
    $history = $_SESSION['tf_chatbot_history'] ?? [];

    chatbotRespond([
        'success' => true,
        'history' => is_array($history) ? $history : [],
        'lead' => chatbotGetLeadSnapshot(),
    ]);
}

$page = chatbotSanitizeText((string) ($input['page'] ?? $_POST['page'] ?? ''), 120);
$leadInput = [
    'name' => chatbotSanitizeText((string) ($input['name'] ?? $_POST['name'] ?? ''), 150),
    'email' => chatbotSanitizeText((string) ($input['email'] ?? $_POST['email'] ?? ''), 150),
    'phone' => chatbotSanitizeText((string) ($input['phone'] ?? $_POST['phone'] ?? ''), 25),
    'requirement' => chatbotSanitizeText((string) ($input['requirement'] ?? $_POST['requirement'] ?? ''), 1200),
];

$message = chatbotSanitizeText((string) ($input['message'] ?? $_POST['message'] ?? ''), 1200);

if ($message === '') {
    chatbotRespond([
        'success' => false,
        'message' => 'Please enter a message.',
    ], 422);
}

$pageLabel = chatbotPageLabel($page);
if (chatbotGetCurrentLeadField(chatbotGetLeadSnapshot()) !== null) {
    $leadFlowResult = chatbotHandleLeadCaptureMessage($message, $page);

    if ($leadFlowResult['handled'] && !$leadFlowResult['continue_to_ai']) {
        chatbotRespond([
            'success' => true,
            'reply' => $leadFlowResult['reply_html'],
            'is_ai' => false,
            'lead' => $leadFlowResult['lead'] ?? chatbotGetLeadSnapshot(),
        ]);
    }
}

if (!empty($leadFlowResult['user_already_stored'])) {
    // User bubble was already added during guided lead capture.
} else {
    chatbotPushUserHistoryMessage($message, true);
}
$directReply = chatbotBuildFallbackReply($message, $pageLabel, false);
$aiResult = [
    'ok' => false,
    'text' => '',
];

if ($directReply === '') {
    $aiResult = chatbotRequestAiReply($message, $pageLabel);
}

$replyText = $directReply;

if ($replyText === '' && $aiResult['ok']) {
    $replyText = $aiResult['text'];

    if (chatbotLooksGenericReply($replyText)) {
        $replyText = chatbotBuildFallbackReply($message, $pageLabel);
    }
}

if ($replyText === '') {
    $replyText = chatbotBuildFallbackReply($message, $pageLabel);
}

if (isset($leadFlowResult) && !empty($leadFlowResult['continue_to_ai']) && !empty($leadFlowResult['ack_text'])) {
    $replyText = $leadFlowResult['ack_text'] . "\n" . $replyText;
}

$replyHtml = chatbotFormatReplyHtml($replyText);
$isAiReply = $directReply === '' && $aiResult['ok'] && !chatbotLooksGenericReply($replyText);

chatbotStoreRenderedMessage('bot', $replyHtml);
chatbotStoreConversationMessage('assistant', $replyText);
chatbotRefreshSavedLead($page, $message);

chatbotRespond([
    'success' => true,
    'reply' => $replyHtml,
    'is_ai' => $isAiReply,
    'lead' => chatbotGetLeadSnapshot(),
]);
