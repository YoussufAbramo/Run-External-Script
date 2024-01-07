<?php

function email_sender($is_enabled, $email_address, $subject, $message, $headers)
{
  if ($is_enabled === true) {
    // Send the email
    $mailSuccess = mail($email_address, $subject, $message, $headers);

    // Check if the email was sent successfully
    if ($mailSuccess) {
      echo "Email sent successfully.";
    } else {
      echo "Failed to send email.";
    }
  }
}
