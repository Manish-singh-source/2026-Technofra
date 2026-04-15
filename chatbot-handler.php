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

function chatbotBuildFallbackReply($message, $pageLabel)
{
    $normalized = function_exists('mb_strtolower') ? mb_strtolower($message, 'UTF-8') : strtolower($message);

    $isGreeting = chatbotKeywordMatch($normalized, ['hi', 'hello', 'hey', 'namaste']);
    $isWebsite = chatbotKeywordMatch($normalized, ['website', 'web design', 'web development', 'wordpress', 'shopify', 'landing page']);
    $isApp = chatbotKeywordMatch($normalized, ['app', 'android', 'ios', 'mobile app']);
    $isBranding = chatbotKeywordMatch($normalized, ['branding', 'logo', 'brand', 'ui', 'ux', 'design']);
    $isMarketing = chatbotKeywordMatch($normalized, ['seo', 'marketing', 'social media', 'ppc', 'ads', 'google']);
    $isPayment = chatbotKeywordMatch($normalized, ['payment', 'gateway', 'razorpay', 'payu', 'upi']);
    $isChatbot = chatbotKeywordMatch($normalized, ['chatbot', 'bot', 'automation', 'whatsapp']);
    $isPricing = chatbotKeywordMatch($normalized, ['price', 'pricing', 'cost', 'budget', 'quote', 'package']);
    $isSupport = chatbotKeywordMatch($normalized, ['help', 'support', 'issue', 'problem', 'assist']);
    $isContact = chatbotKeywordMatch($normalized, ['call', 'phone', 'email', 'contact', 'callback', 'talk']);

    if ($isGreeting) {
        return 'Hello, and welcome to Technofra.' . "\n" . 'Please share your requirement, and I will guide you with the most relevant next step.';
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

    if ($isChatbot) {
        return 'Yes, we can set up website chatbots, WhatsApp automation, and customer support workflows.' . "\n" . 'You can explore our [[Chatbot Solutions|https://technofra.com/chatbot]] page for relevant use cases.';
    }

    if ($isPricing) {
        return 'Pricing depends on the project scope, features, and delivery timeline.' . "\n" . 'If you share your requirement through our [[Contact Page|https://technofra.com/contact]], our team can prepare a suitable estimate.';
    }

    if ($isContact) {
        return 'You can connect with our team through the [[Contact Page|https://technofra.com/contact]], schedule a discussion via [[Book a Call|https://technofra.com/book-a-call]], or message us on [[WhatsApp|https://wa.me/918080721003]].';
    }

    if ($isSupport) {
        return 'I am here to assist you.' . "\n" . 'Please share your requirement, business goal, or issue in one line so I can guide you more precisely.';
    }

    return 'Thank you for your message. You are currently browsing our ' . $pageLabel . '.' . "\n" . 'Please let me know whether you need website development, app development, branding, marketing, payment integration, or chatbot support.';
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
        'If the user asks about pricing, explain that pricing depends on scope and recommend contact or book-a-call.',
        'If the user asks something unrelated to Technofra services, still answer briefly and then bring the conversation back to how Technofra can help.',
        'Never claim fake guarantees, fake pricing, or unavailable company details.',
        'Do not use markdown tables.',
        'Do not output raw HTML.',
        'Do not expose raw URLs directly in the visible reply.',
        'If a link is helpful, use this exact format: [[Label|URL]].',
        'Use at most 2 links in one reply.',
        'Available links:',
        '[[Contact Page|https://technofra.com/contact]]',
        '[[Book a Call|https://technofra.com/book-a-call]]',
        '[[Website Services|https://technofra.com/web-design]]',
        '[[App Development|https://technofra.com/android-app-development]]',
        '[[Branding Services|https://technofra.com/branding]]',
        '[[Digital Marketing|https://technofra.com/digital-marketing]]',
        '[[Payment Gateway Solutions|https://technofra.com/payment-gateway]]',
        '[[Chatbot Solutions|https://technofra.com/chatbot]]',
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

if ($action === 'history') {
    $history = $_SESSION['tf_chatbot_history'] ?? [];

    chatbotRespond([
        'success' => true,
        'history' => is_array($history) ? $history : [],
    ]);
}

$message = chatbotSanitizeText((string) ($input['message'] ?? $_POST['message'] ?? ''), 1200);
$page = chatbotSanitizeText((string) ($input['page'] ?? $_POST['page'] ?? ''), 120);

if ($message === '') {
    chatbotRespond([
        'success' => false,
        'message' => 'Please enter a message.',
    ], 422);
}

$pageLabel = chatbotPageLabel($page);
$userHtml = nl2br(chatbotEscape($message));
$aiResult = chatbotRequestAiReply($message, $pageLabel);
$replyText = $aiResult['ok'] ? $aiResult['text'] : chatbotBuildFallbackReply($message, $pageLabel);
$replyHtml = chatbotFormatReplyHtml($replyText);

chatbotStoreRenderedMessage('user', $userHtml);
chatbotStoreRenderedMessage('bot', $replyHtml);
chatbotStoreConversationMessage('user', $message);
chatbotStoreConversationMessage('assistant', $replyText);

chatbotRespond([
    'success' => true,
    'reply' => $replyHtml,
    'is_ai' => $aiResult['ok'],
]);
