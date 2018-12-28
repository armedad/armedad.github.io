<?php
	require_once "init.php";
?>
<?php

use Twilio\Twiml;

$DEBUGLEVEL = $DEBUGTRACE;


    DebugMsg($DEBUGTRACE, $multi_key_string);

$PREFIX = "SMSSPLIT:";
$PREFIXLEN = strlen($PREFIX);
$multi_key_string = "SMSSPLIT:test;test2;test3";

// search to the prefix, ignoring the goo ahead of it
DebugMsg($DEBUGTRACE, $multi_key_string);
$multi_key_string = strstr($multi_key_string, $PREFIX);
DebugMsg($DEBUGTRACE, "after strstr " . $multi_key_string);

if ($multi_key_string) {
    $multi_key_data = substr($multi_key_string, $PREFIXLEN);
    DebugMsg($DEBUGTRACE, "multi_key_string 1: " . $multi_key_string);
    if ($multi_key_data) {

	$array_keys = explode(";", $multi_key_data);


	foreach ($array_keys as $key)
	{
	    if ($key) {
		print $key;
		print "<br>\n";
	    }
	}
	
    } else {
	DebugMsg($DEBUGTRACE, "no prefix");
    }
}

?>
