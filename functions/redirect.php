<?php

function URL_redirect($is_enabled)
{
  if ($is_enabled === true) {
    header("Location: https://www.google.com/");
    exit();
  }
}
