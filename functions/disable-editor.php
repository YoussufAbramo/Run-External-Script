<?php

function disable_editor($is_enabled)
{
  if ($is_enabled === true) {
    define('DISALLOW_FILE_EDIT', true);
  }
}
