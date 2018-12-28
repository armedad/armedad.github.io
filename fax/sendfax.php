<?php
	require_once "init.php";
	$DEBUGLEVEL = $DEBUGTRACE;
	DebugMsg($DEBUGTRACE, "after sendfax init");
?>
<?php

$target_file =  $_POST["fileToUpload"];   
if ($_POST["submit"] == "sendFax" && $target_file) {
   print "time to send the fax! \n<br>";
   print "this is the file name: " . $target_file;
$fax = $twilio->fax->v1->faxes
                       ->create("+15558675310", // to
                                "https://www.twilio.com/docs/documents/25/justthefaxmaam.pdf", // mediaUrl
                                array("from" => "+15017122661")
                       );

print($fax->sid);
   
} else {
   print "nice day ain't it?";
}


?>


