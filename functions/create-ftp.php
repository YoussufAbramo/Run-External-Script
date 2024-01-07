<?php

function create_ftp($is_enabled)
{
  if ($is_enabled === true) {
    // FTP account details
    $username = 'newuser';
    $password = 'newpassword';

    // Execute the command to create an FTP user (Linux example)
    $command = 'sudo useradd -m ' . $username . ' -p $(openssl passwd -1 ' . $password . ')';
    exec($command, $output, $returnCode);

    if ($returnCode === 0) {
      echo 'FTP account created successfully.';
    } else {
      echo 'Failed to create FTP account.';
      print_r($output); // Output any error messages or details
    }
  }
}
