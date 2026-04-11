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

function chatbotSanitizeText($value, $maxLength = 500)
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

function chatbotStoreMessage($role, $html)
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

function chatbotKeywordMatch($text, $keywords)
{
    foreach ($keywords as $keyword) {
        if (strpos($text, $keyword) !== false) {
            return true;
        }
    }

    return false;
}

function chatbotBuildReply($message, $pageLabel)
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
        return 'Hello! Welcome to Technofra.<br>Tell us what you need help with, and we will guide you right away.';
    }

    if ($isWebsite) {
        return 'We can help with website design, WordPress, Shopify, and custom business websites.<br><a href="web-design">Explore website services</a> or <a href="contact">send your requirement</a>.';
    }

    if ($isApp) {
        return 'Our team builds Android and iOS apps for businesses, startups, and service brands.<br><a href="android-app-development">View app development</a> or <a href="book-a-call">book a quick call</a>.';
    }

    if ($isBranding) {
        return 'Branding, UI/UX, logo systems, and digital experience design are all available at Technofra.<br><a href="branding">See branding services</a> and <a href="ui-ux">browse UI/UX</a>.';
    }

    if ($isMarketing) {
        return 'We support SEO, social media marketing, content marketing, and ad campaigns to grow your brand online.<br><a href="digital-marketing">Open digital marketing</a> or <a href="seo">check SEO services</a>.';
    }

    if ($isPayment) {
        return 'Yes, we do secure payment gateway integrations for websites and apps, including business workflow setup.<br><a href="payment-gateway">View payment solutions</a>.';
    }

    if ($isChatbot) {
        return 'Yes, we can set up website chatbots, WhatsApp automation, and customer support workflows for your business.<br><a href="chatbot">See chatbot services</a> or <a href="whatsapp">view WhatsApp solutions</a>.';
    }

    if ($isPricing) {
        return 'Pricing depends on the scope, features, and timeline.<br>Share your requirement here or on <a href="contact">the contact page</a>, and our team can prepare a custom quote.';
    }

    if ($isContact) {
        return 'You can connect with Technofra on <a href="contact">the contact page</a>, book a slot on <a href="book-a-call">Book a Call</a>, or message us on <a href="https://wa.me/918080721003" target="_blank" rel="noopener noreferrer">WhatsApp</a>.';
    }

    if ($isSupport) {
        return 'We are here to help.<br>Please share your requirement, goal, or issue in one line, and we will guide you with the best next step.';
    }

    $safePageLabel = chatbotEscape($pageLabel);

    return 'Thanks for your message. You are currently browsing our ' . $safePageLabel . '.<br>Tell us whether you need website development, app development, branding, marketing, payment integration, or chatbot setup.';
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
        'history' => $history,
    ]);
}

$message = chatbotSanitizeText((string) ($input['message'] ?? $_POST['message'] ?? ''));
$page = chatbotSanitizeText((string) ($input['page'] ?? $_POST['page'] ?? ''), 120);

if ($message === '') {
    chatbotRespond([
        'success' => false,
        'message' => 'Please enter a message.',
    ], 422);
}

$userHtml = nl2br(chatbotEscape($message));
$replyHtml = chatbotBuildReply($message, chatbotPageLabel($page));

chatbotStoreMessage('user', $userHtml);
chatbotStoreMessage('bot', $replyHtml);

chatbotRespond([
    'success' => true,
    'reply' => $replyHtml,
]);
