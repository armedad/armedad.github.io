<?php

require_once __DIR__ . '/loadtwilio.php';
//require_once __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;


// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC19754b7c0d0e411972e197f23b59a2a7';
$token = 'df1e938987a1dafb923adf77414a8b6f';
$client = new Client($sid, $token);

?>
