<?php
  $rootdir =  __DIR__ . "/..";

  require_once $rootdir . "/debug.php";
  require_once $rootdir . "/sms.php";

  function TextToNumber($number, $msg) {
        global $DEBUGLEVEL;
        global $DEBUGTRACE;
        global $client;
  
  	print $DEBUGLEVEL . " debuglevel \n" . $DEBUGTRACE . " debugtrace\n";
	DebugMsg($DEBUGTRACE, "Enter TextToNumber");
	$msgContent = array(
		// A Twilio phone number you purchased at twilio.com/console
		'from' => '+14582243324',
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