<?php
/**
 * Form Handler for Hyundai Website
 * Stores form submissions in a text file (no database)
 */

// Set content type
header('Content-Type: application/json');

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get form data
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validate required fields
if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit;
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email format']);
    exit;
}

// Sanitize inputs
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Create data directory if it doesn't exist
$dataDir = __DIR__ . '/../data';
if (!file_exists($dataDir)) {
    mkdir($dataDir, 0755, true);
}

// Prepare submission data
$submission = [
    'timestamp' => date('Y-m-d H:i:s'),
    'name' => $name,
    'email' => $email,
    'message' => $message
];

// Format entry for text file
$entry = "==========================================\n";
$entry .= "Date: " . $submission['timestamp'] . "\n";
$entry .= "Name: " . $submission['name'] . "\n";
$entry .= "Email: " . $submission['email'] . "\n";
$entry .= "Message: " . $submission['message'] . "\n";
$entry .= "==========================================\n\n";

// Write to file
$filename = $dataDir . '/submissions.txt';
$fileWritten = file_put_contents($filename, $entry, FILE_APPEND | LOCK_EX);

if ($fileWritten === false) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to save submission']);
    exit;
}

// Success response
http_response_code(200);
echo json_encode([
    'success' => true,
    'message' => 'Thank you for contacting us! We will get back to you soon.'
]);

// Optional: Redirect back to contact section
// header('Location: ../index.php#contact?success=1');
exit;
?>

