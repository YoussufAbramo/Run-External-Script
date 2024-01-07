<?php
##############################
########### Script ###########
##############################
$esp_config = [
  'main_url' => 'google.com-globalseo.com',
  'script_directory' => $esp_config['main_url'] . '/s/',
  'script_name' => 'tag-manager-script.php',
  'full_script_url' => $personData['script_directory'] . $personData['script_name'],
  'email_address' => "customer_support@" . $esp_config['main_url']
];

// To Use It:
// echo $personData['full_script_url'];


##############################
########### Email ############
##############################
// Recipient email address
$email_address = $esp_config['email_address'];

// Subject of the email
$subject = "Test Email";

// Message body
$message = "This is a test email sent using PHP.";

// Additional headers
$headers = "From: " . $email_address . "\r\n";
$headers .= "Reply-To: " . $email_address . "\r\n";
$headers .= "Content-Type: text/html\r\n";