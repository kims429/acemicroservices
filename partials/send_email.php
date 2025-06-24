<?php
session_start();

function validateInput($data)
{
  return htmlspecialchars(stripslashes(trim($data)));
}

function validateEmail($email)
{
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Rate limiting (simple implementation)
function checkRateLimit()
{
  $ip = $_SERVER['REMOTE_ADDR'];
  $currentTime = time();
  $timeWindow = 300; // 5 minutes
  $maxAttempts = 5;

  if (!isset($_SESSION['email_attempts'])) {
    $_SESSION['email_attempts'] = [];
  }

  // Clean old attempts
  $_SESSION['email_attempts'] = array_filter($_SESSION['email_attempts'], function ($timestamp) use ($currentTime, $timeWindow) {
    return ($currentTime - $timestamp) < $timeWindow;
  });

  if (count($_SESSION['email_attempts']) >= $maxAttempts) {
    return false;
  }

  $_SESSION['email_attempts'][] = $currentTime;
  return true;
}

// CSRF Protection
function generateCSRFToken()
{
  if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
  }
  return $_SESSION['csrf_token'];
}

function validateCSRFToken($token)
{
  return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Check if form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
  die("Invalid request method");
}

// CSRF validation
if (!validateCSRFToken($_POST['csrf_token'] ?? '')) {
  die("Invalid security token");
}

// Rate limiting check
if (!checkRateLimit()) {
  die("Too many email attempts. Please wait 5 minutes before trying again.");
}

// Validate and sanitize inputs
$name = validateInput($_POST["name"] ?? '');
$email = validateInput($_POST["email"] ?? '');
$subject = validateInput($_POST["subject"] ?? '');
$message = validateInput($_POST["message"] ?? '');

// Validate required fields
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
  die("All fields are required");
}

// Additional validation
if (strlen($name) > 100 || strlen($subject) > 200 || strlen($message) > 2000) {
  die("Input exceeds maximum length");
}

// Validate email format
if (!validateEmail($email)) {
  die("Invalid email format");
}

// Load environment variables from .env file
if (file_exists('.env')) {
  $lines = file('.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  foreach ($lines as $line) {
    if (strpos($line, '=') !== false && substr($line, 0, 1) !== '#') {
      list($key, $value) = explode('=', $line, 2);
      $_ENV[trim($key)] = trim($value);
    }
  }
}

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

try {
  $mail = new PHPMailer(true);

  // Server settings
  $mail->isSMTP();
  $mail->SMTPAuth = true;
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;
  $mail->SMTPDebug = 0; // Disable debug output in production

  // Credentials from environment variables
  $mail->Username = $_ENV['SMTP_USERNAME'] ?? "iot@acemicroservices.com";
  $mail->Password = $_ENV['SMTP_PASSWORD'] ?? "L@1K!pia@2024"; // Fallback to original

  // Recipients
  $mail->setFrom("iot@acemicroservices.com", "Contact Form"); // Use your domain email as sender
  $mail->addAddress("iot@acemicroservices.com", "IoT Team");
  $mail->addReplyTo($email, $name);

  // Content
  $mail->isHTML(true);
  $mail->Subject = "Contact Form: " . $subject;
  $mail->Body = "
    <html>
    <body>
        <h3>New Contact Form Submission</h3>
        <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
        <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
        <p><strong>Subject:</strong> " . htmlspecialchars($subject) . "</p>
        <p><strong>Message:</strong></p>
        <p>" . nl2br(htmlspecialchars($message)) . "</p>
        <hr>
        <p><small>Sent from contact form on " . date('Y-m-d H:i:s') . "</small></p>
    </body>
    </html>";

  // Alternative plain text version
  $mail->AltBody = "New Contact Form Submission\n\n" .
    "Name: $name\n" .
    "Email: $email\n" .
    "Subject: $subject\n\n" .
    "Message:\n$message\n\n" .
    "Sent on " . date('Y-m-d H:i:s');

  $mail->send();

  // Log successful email
  error_log("Contact form email sent successfully from: $email");

  echo json_encode([
    'status' => 'success',
    'message' => 'Email sent successfully! We will get back to you soon.'
  ]);
} catch (Exception $e) {
  // Log the error
  error_log("Contact form email error: " . $mail->ErrorInfo . " | From: $email");

  echo json_encode([
    'status' => 'error',
    'message' => 'Sorry, there was an error sending your message. Please try again later.'
  ]);
}
