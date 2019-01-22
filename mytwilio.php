<?php

require_once __DIR__ . '/loadtwilio.php';
//require_once __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;


// Your Account SID and Auth Token from twilio.com/console
$sid = '';
$token = '';
$client = new Client($sid, $token);
//$twilioNumber = '+';
$twilioNumber = '+';
$twilio = $client;



  function TextToNumber($number, $msg) {
        global $DEBUGLEVEL;
        global $DEBUGTRACE;
        global $client;
        global $twilioNumber;
  
	DebugMsg($DEBUGTRACE, "Enter TextToNumber: twilioNumber: " . $twilioNumber . " msg: " . $msg);
	$msgContent = array(
		// A Twilio phone number you purchased at twilio.com/console
		'from' => $twilioNumber,
		// the body of the text message you'd like to send
		'body' => $msg
	);
	
        DebugMsg($DEBUGTRACE, $client);
        // Use the client to do fun stuff like send text messages!
	$client->messages->create(
	    // the number you'd like to send the message to
	    $number,
	    $msgContent
	);
	
	DebugMsg($DEBUGTRACE, "Leave TextToNumber");
  }

  function TextGameControl($msg) {

    TextToNumber('+14242424394', $msg);

  }
  


?>
