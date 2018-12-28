<?php
require_once "init.php";
?>
<?php

use Twilio\Twiml;

$response = new Twiml;
$body = $_REQUEST['Body'];
$from = $_REQUEST['From'];
$to = $_REQUEST['To'];
$nummedia = $_REQUEST['NumMedia'];
$accountsid = $_REQUEST['AccountSid'];
$messagesid = $_REQUEST['MessageSid'];
$PREFIX = "SMSSPLIT:";
$PREFIXLEN = strlen($PREFIX);

//$DEBUGLEVEL = $DEBUGTRACE;
switch ($body) {

case "echo":
    $response->message("body: " . $body . "\n" .
		       "from: " . $from . "\n" .
		       "to: " . $to . "\n" .
		       "nummedia: " . $nummedia . "\n" .
		       "accountsid: " . $accountsid . "\n" .
		       "messagesid: " . $messagesid );
    break;

default:
    if (strlen($body) == 0) {
	$multi_key_string = "SMSSPLIT:test;test2;test3";
    } else {
	$multi_key_string = $body;
    }

    DebugMsg($DEBUGTRACE, $multi_key_string);
    // search to the prefix, ignoring the goo ahead of it

    $multi_key_string = strstr($multi_key_string, $PREFIX);

    if ($multi_key_string) {
	$multi_key_data = substr($multi_key_string, $PREFIXLEN);
	if ($multi_key_data) {

	    $array_keys = explode(";", $multi_key_data);

	    foreach ($array_keys as $key)
	    {
		if ($key) {
		    $response->message("SMSKEY:" . $key);
		}
	    }
	    
	} else {
	    DebugMsg($DEBUGTRACE, "no prefix");
	    $response->message("didn't find the prefix: " . $PREFIX);
	    /// text to game control
	    //TextGameControl("IncomingHandler body: " . $body . "\n" . $response);
	}
    } else {
	$response->message("didn't find the prefix: " . $PREFIX);
    }
}
print $response;
/// text to game control
//TextGameControl("IncomingHandler body: " . $body . "\n" . $response);

?>
