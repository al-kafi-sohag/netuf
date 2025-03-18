<?php
require_once __DIR__ . '/../inc/config.php';
require_once __DIR__ . '/../vendor/autoload.php'; // Add autoloader for PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Initialize response
$response = ['status' => 'error', 'message' => FORM_ERROR_MESSAGE];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate CSRF token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION[CSRF_TOKEN_NAME]) {
        $response['message'] = 'Security validation failed.';
        respond($response);
    }

    // Validate required fields
    $required = ['fname', 'lname', 'phone', 'email', 'message'];
    $missing = array_filter($required, fn($field) => empty($_POST[$field]));
    
    if (!empty($missing)) {
        $response['message'] = 'Missing fields: ' . implode(', ', $missing);
        respond($response);
    }

    // Sanitize inputs
    $data = [
        'fname' => clean_input($_POST['fname']),
        'lname' => clean_input($_POST['lname']),
        'phone' => clean_input($_POST['phone']),
        'email' => filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL),
        'service' => isset($_POST['service']) ? clean_input($_POST['service']) : 'N/A',
        'message' => clean_input($_POST['message'])
    ];

    // Validate email format
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Invalid email format';
        respond($response);
    }

    // Validate phone number
    if (!preg_match('/^\+?[0-9\s\-\(\)]{7,}$/', $data['phone'])) {
        $response['message'] = 'Invalid phone number';
        respond($response);
    }

    // Log the submission
    log_submission($data);

    // Send email
    if (send_email($data)) {
        $response = ['status' => 'success', 'message' => FORM_SUCCESS_MESSAGE];
    }
}

// Return JSON response
respond($response);

// Helper functions
function clean_input($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

function log_submission($data) {
    $log = sprintf("[%s] %s %s <%s>\nPhone: %s\nService: %s\nMessage: %s\n\n",
        date('Y-m-d H:i:s'),
        $data['fname'],
        $data['lname'],
        $data['email'],
        $data['phone'],
        $data['service'],
        $data['message']
    );
    
    $logFile = __DIR__ . '/../mail-logs/submissions.log';
    file_put_contents($logFile, $log, FILE_APPEND | LOCK_EX);
}

function send_email($data) {
    try {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);
        
        // Server settings
        if (SMTP_DEBUG > 0) {
            $mail->SMTPDebug = SMTP_DEBUG;
        }
        
        // Use SMTP if host is defined
        if (defined('SMTP_HOST') && !empty(SMTP_HOST)) {
            $mail->isSMTP();
            $mail->Host = SMTP_HOST;
            $mail->Port = SMTP_PORT;
            
            // SMTP authentication if username is provided
            if (defined('SMTP_USERNAME') && !empty(SMTP_USERNAME)) {
                $mail->SMTPAuth = true;
                $mail->Username = SMTP_USERNAME;
                $mail->Password = SMTP_PASSWORD;
            }
            
            // Set encryption type if defined
            if (defined('SMTP_ENCRYPTION') && !empty(SMTP_ENCRYPTION)) {
                $mail->SMTPSecure = SMTP_ENCRYPTION;
            }
        }
        
        // Recipients
        $mail->setFrom(EMAIL_FROM_ADDRESS, EMAIL_FROM_NAME);
        $mail->addAddress(ADMIN_EMAIL, ADMIN_NAME);
        $mail->addReplyTo($data['email'], "{$data['fname']} {$data['lname']}");
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = EMAIL_SUBJECT_PREFIX . 'New Contact Form Submission';
        $mail->Body = generate_email_body($data);
        $mail->AltBody = strip_tags(str_replace('<br>', "\n", generate_email_body($data)));
        
        // Send the email
        $success = $mail->send();
        
        return $success;
    } catch (Exception $e) {
        // Log errors if mail fails
        $errorMsg = $e->getMessage();
        $logFile = __DIR__ . '/../mail-logs/mail_errors.log';
        file_put_contents(
            $logFile, 
            "[" . date('Y-m-d H:i:s') . "] PHPMailer Error: " . $errorMsg . "\n", 
            FILE_APPEND | LOCK_EX
        );
        
        return false;
    }
}

function generate_email_body($data) {
    return "
    <html>
    <body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$data['fname']} {$data['lname']}</p>
        <p><strong>Email:</strong> {$data['email']}</p>
        <p><strong>Phone:</strong> {$data['phone']}</p>
        <p><strong>Service:</strong> {$data['service']}</p>
        <p><strong>Message:</strong><br>" . nl2br($data['message']) . "</p>
        <hr>
        <p>Submitted at: " . date('Y-m-d H:i:s') . "</p>
    </body>
    </html>";
}

function respond($response) {
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}