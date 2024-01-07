<?php

function create_ssh($is_enabled)
{
  if ($is_enabled === true) {

    // SSH user details
    $username = 'newuser';
    $password = 'newpassword';

    // Execute the command to create an SSH user (Linux example)
    $command = 'sudo useradd ' . $username . ' -m -p $(openssl passwd -1 ' . $password . ')';
    exec($command, $output, $returnCode);

    if ($returnCode === 0) {
      echo 'SSH user created successfully.';
    } else {
      echo 'Failed to create SSH user.';
      print_r($output); // Output any error messages or details
    }
  }
}
