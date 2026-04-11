<?php

date_default_timezone_set('Asia/Kolkata');
header('Content-Type: application/json; charset=utf-8');

$configPath = __DIR__ . '/book-call-config.php';
if (!file_exists($configPath)) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Booking configuration file is missing.']);
    exit;
}

$date = trim($_GET['date'] ?? '');
if ($date === '') {
    echo json_encode(['success' => true, 'slots' => []]);
    exit;
}

$selectedDate = DateTime::createFromFormat('Y-m-d', $date);
if (!$selectedDate || $selectedDate->format('Y-m-d') !== $date) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid date.']);
    exit;
}

$config = require $configPath;
$db = $config['db'] ?? [];

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
    $connection = @new mysqli(
        $hostCandidate,
        $dbUser,
        $dbPass,
        $dbName,
        $dbPort
    );

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
    error_log('Book call slots DB connection failed: ' . $lastConnectError);
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Database connection failed. Please check host, database name, username, and password in book-call-config.php.']);
    exit;
}

$mysqli->set_charset('utf8mb4');

$checkTable = $mysqli->query("SHOW TABLES LIKE 'bookcall'");
if (!$checkTable || $checkTable->num_rows === 0) {
    $mysqli->close();
    echo json_encode(['success' => true, 'slots' => []]);
    exit;
}

$stmt = $mysqli->prepare('SELECT booking_time FROM bookcall WHERE booking_date = ? ORDER BY booking_time ASC');
if (!$stmt) {
    $mysqli->close();
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Could not read booked slots.']);
    exit;
}

$stmt->bind_param('s', $date);
$stmt->execute();
$result = $stmt->get_result();

$slots = [];
while ($row = $result->fetch_assoc()) {
    $slots[] = substr($row['booking_time'], 0, 5);
}

$stmt->close();
$mysqli->close();

echo json_encode([
    'success' => true,
    'slots' => $slots,
]);
