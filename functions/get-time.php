<?php

// Set the timezone to 'Egypt/Cairo'
date_default_timezone_set('Africa/Cairo');

// Create a DateTime object for the current date and time in the specified timezone
$currentDateTimeObj = new DateTime(null, new DateTimeZone('Africa/Cairo'));

// Format and display the current date and time
echo "Current Date and Time in Cairo: " . $currentDateTimeObj->format("Y-m-d H:i:s");
