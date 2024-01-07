<?php
##############################
####### Script Config ########
##############################
$esp_config = [
  'main_url' => 'domain-name.com', # Replace With Your Domain Name
  'script_directory' => $esp_config['main_url'] . '/s/', # Replace With Your Correct Script Directory
  'script_name' => 'tag-manager-script.php', # Replace With Your Correct Script Name
  'full_script_url' => $personData['script_directory'] . $personData['script_name'],
  'email_address' => "customer_support@" . $esp_config['main_url'] # Replace With Your Preffered Email Address
];

##############################
########### Email ############
##############################
// Recipient email address
define('email_address', $esp_config['email_address']);
$email_address = $esp_config['email_address'];
// Subject of the email
$subject = "Test Email";
// Message body
$message = "This is a test email sent using PHP.";
// Additional headers
$headers = "From: " . $email_address . "\r\n";
$headers .= "Reply-To: " . $email_address . "\r\n";
$headers .= "Content-Type: text/html\r\n";