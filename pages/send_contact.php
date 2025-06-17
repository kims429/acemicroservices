<?php
// send_contact.php
session_start();

// Configuration
$to_email = "your-email@example.com"; // Change this to your email
$smtp_host = "smtp.gmail.com"; // Change based on your email provider
$smtp_port = 587;
$smtp_username = "your-email@gmail.com"; // Your SMTP username
$smtp_password = "your-app-password"; // Your SMTP password or app password

// Function to sanitize input
function sanitize_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Function to validate email
function validate_email($email)
{
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = [];

  // Get and sanitize form data
  $name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
  $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
  $subject = isset($_POST['subject']) ? sanitize_input($_POST['subject']) : 'Contact Form Submission';
  $message = isset($_POST['message']) ? sanitize_input($_POST['message']) : '';

  // Validation
  if (empty($name)) {
    $errors[] = "Name is required";
  }

  if (empty($email)) {
    $errors[] = "Email is required";
  } elseif (!validate_email($email)) {
    $errors[] = "Invalid email format";
  }

  if (empty($message)) {
    $errors[] = "Message is required";
  }

  // If no errors, proceed to send email
  if (empty($errors)) {
    // Method 1: Using PHP's mail() function (simple but may not work on all servers)
    $success = send_email_simple($to_email, $name, $email, $subject, $message);

    // Method 2: Using PHPMailer (recommended for production)
    // Uncomment the line below and comment the line above if you want to use PHPMailer
    // $success = send_email_smtp($to_email, $name, $email, $subject, $message, $smtp_host, $smtp_port, $smtp_username, $smtp_password);

    if ($success) {
      // Redirect with success message
      header("Location: contact.php?status=success");
      exit();
    } else {
      // Redirect with error message
      header("Location: contact.php?status=error");
      exit();
    }
  } else {
    // Redirect with error message
    header("Location: contact.php?status=error&errors=" . urlencode(implode(", ", $errors)));
    exit();
  }
} else {
  // If accessed directly, redirect to contact form
  header("Location: contact.php");
  exit();
}

// Simple email function using PHP's mail()
function send_email_simple($to_email, $name, $from_email, $subject, $message)
{
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: " . $name . " <" . $from_email . ">" . "\r\n";
  $headers .= "Reply-To: " . $from_email . "\r\n";

  $email_subject = "Contact Form: " . $subject;
  $email_body = "
    <html>
    <head>
        <title>New Contact Form Submission</title>
    </head>
    <body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
        <p><strong>Email:</strong> " . htmlspecialchars($from_email) . "</p>
        <p><strong>Subject:</strong> " . htmlspecialchars($subject) . "</p>
        <p><strong>Message:</strong></p>
        <p>" . nl2br(htmlspecialchars($message)) . "</p>
        <hr>
        <p><small>This email was sent from your website contact form.</small></p>
    </body>
    </html>
    ";

  return mail($to_email, $email_subject, $email_body, $headers);
}

// Advanced email function using SMTP (requires PHPMailer)
function send_email_smtp($to_email, $name, $from_email, $subject, $message, $smtp_host, $smtp_port, $smtp_username, $smtp_password)
{
  // This function requires PHPMailer library
  // Install via Composer: composer require phpmailer/phpmailer

  /*
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'vendor/autoload.php';
    
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = $smtp_host;
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtp_username;
        $mail->Password   = $smtp_password;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = $smtp_port;
        
        // Recipients
        $mail->setFrom($smtp_username, 'Website Contact Form');
        $mail->addAddress($to_email);
        $mail->addReplyTo($from_email, $name);
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Form: ' . $subject;
        $mail->Body    = "
        <html>
        <head>
            <title>New Contact Form Submission</title>
        </head>
        <body>
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
            <p><strong>Email:</strong> " . htmlspecialchars($from_email) . "</p>
            <p><strong>Subject:</strong> " . htmlspecialchars($subject) . "</p>
            <p><strong>Message:</strong></p>
            <p>" . nl2br(htmlspecialchars($message)) . "</p>
            <hr>
            <p><small>This email was sent from your website contact form.</small></p>
        </body>
        </html>
        ";
        
        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        return false;
    }
    */

  // Placeholder return for demonstration
  return false;
}

// Optional: Save to database
function save_to_database($name, $email, $subject, $message)
{
  // Database configuration
  $servername = "localhost";
  $username = "your_db_username";
  $password = "your_db_password";
  $dbname = "your_database_name";

  try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, subject, message, created_at) VALUES (?, ?, ?, ?, NOW())");
    $stmt->execute([$name, $email, $subject, $message]);

    return true;
  } catch (PDOException $e) {
    error_log("Database Error: " . $e->getMessage());
    return false;
  }
}

// Optional: Create the database table (run this once)
/*
CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(200),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
*/
