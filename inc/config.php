<?php
session_start();

// define("BASE_URL", "https://rosybrown-seal-470751.hostingersite.com");
define("BASE_URL", "http://localhost/netuf/netuf");

// Admin/Receiver Email Configuration
define("ADMIN_EMAIL", "admin@networkutilityforce.com");
define("ADMIN_NAME", "Network Utility Force");

// Email Content Configuration
define("EMAIL_FROM_ADDRESS", "no-reply@networkutilityforce.com");
define("EMAIL_FROM_NAME", "Network Utility Force");
define("EMAIL_SUBJECT_PREFIX", "[Network Utility Force] ");

// PHPMailer Configuration
define("SMTP_HOST", "sandbox.smtp.mailtrap.io"); // Mailtrap SMTP server
define("SMTP_PORT", 2525); // Mailtrap port
define("SMTP_USERNAME", "a284539ba27a77"); // Mailtrap username
define("SMTP_PASSWORD", "228027ba889739"); // Mailtrap password
define("SMTP_ENCRYPTION", "tls"); // Options: '', 'ssl', 'tls'
define("SMTP_DEBUG", 0); // Debug level (0-4): 0=off, 1=client, 2=client/server, 3=client/server/connection, 4=low-level

// Form Configuration
define("FORM_SUCCESS_MESSAGE", "Thank you for contacting Network Utility Force. We have received your inquiry and will get back to you shortly.");
define("FORM_ERROR_MESSAGE", "Sorry, there was an issue processing your request. Please try again or contact us directly.");

// CSRF Security
define('CSRF_TOKEN_NAME', 'netuf_csrf');

// Generate CSRF token if not exists
if (empty($_SESSION[CSRF_TOKEN_NAME])) {
    $_SESSION[CSRF_TOKEN_NAME] = bin2hex(random_bytes(32));
}

// Basic security headers
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");
