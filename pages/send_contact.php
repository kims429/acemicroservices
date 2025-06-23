<?php
// Configuration
$recaptcha_secret_key = 'YOUR_RECAPTCHA_SECRET_KEY'; // Replace with your actual secret key
$to_email = 'your-email@example.com'; // Replace with your email address
$from_email = 'noreply@yourdomain.com'; // Replace with your domain email

// Function to verify reCAPTCHA
function verifyRecaptcha($secret_key, $response)
{
  $url = 'https://www.google.com/recaptcha/api/siteverify';

  $data = array(
    'secret' => $secret_key,
    'response' => $response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
  );

  $options = array(
    'http' => array(
      'header' => "Content-type: application/x-www-form-urlencoded\r\n",
      'method' => 'POST',
      'content' => http_build_query($data)
    )
  );

  $context = stream_context_create($options);
  $result = file_get_contents($url, false, $context);

  if ($result === FALSE) {
    return false;
  }

  $json = json_decode($result, true);
  return $json['success'];
}

// Function to send email
function sendEmail($to, $from, $name, $email, $subject, $message)
{
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: " . $from . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  $email_subject = !empty($subject) ? $subject : "New Contact Form Message";

  $email_body = "
    <html>
    <head>
        <title>New Contact Form Message</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #004D4A; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f9f9f9; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #004D4A; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Contact Form Message</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>Name:</div>
                    <div>" . htmlspecialchars($name) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Email:</div>
                    <div>" . htmlspecialchars($email) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Subject:</div>
                    <div>" . htmlspecialchars($email_subject) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Message:</div>
                    <div>" . nl2br(htmlspecialchars($message)) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Date:</div>
                    <div>" . date('Y-m-d H:i:s') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>IP Address:</div>
                    <div>" . $_SERVER['REMOTE_ADDR'] . "</div>
                </div>
            </div>
        </div>
    </body>
    </html>";

  return mail($to, $email_subject, $email_body, $headers);
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get form data
  $name = isset($_POST['name']) ? trim($_POST['name']) : '';
  $email = isset($_POST['email']) ? trim($_POST['email']) : '';
  $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
  $message = isset($_POST['message']) ? trim($_POST['message']) : '';
  $recaptcha_response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';

  // Validate required fields
  if (empty($name) || empty($email) || empty($message)) {
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=error');
    exit();
  }

  // Validate email format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=error');
    exit();
  }

  // Verify reCAPTCHA
  if (empty($recaptcha_response)) {
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=error');
    exit();
  }

  if (!verifyRecaptcha($recaptcha_secret_key, $recaptcha_response)) {
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=recaptcha_error');
    exit();
  }

  // Additional security measures
  // Check for spam keywords (optional)
  $spam_keywords = array('viagra', 'cialis', 'casino', 'poker', 'loan', 'mortgage');
  $content_check = strtolower($name . ' ' . $email . ' ' . $subject . ' ' . $message);

  foreach ($spam_keywords as $keyword) {
    if (strpos($content_check, $keyword) !== false) {
      header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=error');
      exit();
    }
  }

  // Rate limiting - check if same IP sent message recently (optional)
  $rate_limit_file = 'rate_limit.txt';
  $current_time = time();
  $ip = $_SERVER['REMOTE_ADDR'];
  $rate_limit_duration = 300; // 5 minutes

  if (file_exists($rate_limit_file)) {
    $rate_data = file_get_contents($rate_limit_file);
    $rate_entries = explode("\n", trim($rate_data));

    foreach ($rate_entries as $entry) {
      if (empty($entry)) continue;
      list($stored_ip, $timestamp) = explode('|', $entry);

      if ($stored_ip == $ip && ($current_time - $timestamp) < $rate_limit_duration) {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=error');
        exit();
      }
    }
  }

  // Send email
  if (sendEmail($to_email, $from_email, $name, $email, $subject, $message)) {
    // Log successful submission for rate limiting
    $log_entry = $ip . '|' . $current_time . "\n";
    file_put_contents($rate_limit_file, $log_entry, FILE_APPEND | LOCK_EX);

    // Optional: Log to file for record keeping
    $log_message = date('Y-m-d H:i:s') . " - Contact form submission from: " . $name . " (" . $email . ")\n";
    file_put_contents('contact_log.txt', $log_message, FILE_APPEND | LOCK_EX);

    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=success');
  } else {
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=error');
  }
} else {
  // If accessed directly, redirect back
  header('Location: contact.php');
}

exit();
