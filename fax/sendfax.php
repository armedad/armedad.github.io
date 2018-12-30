<?php
	require_once "init.php";
	$DEBUGLEVEL = $DEBUGTRACE;
	DebugMsg($DEBUGTRACE, "after sendfax init");
?>
<?php

$target_file =  $_POST["fileToUpload"];   
$fax_number =  $_POST["faxNumber"];
$target_file_url = $_POST["targetFileUrl"];
if ($_POST["submit"] == "sendFax" && $target_file && $fax_number) {
    print "time to send the fax! \n<br>";
    print "this is the file name: " . $target_file . "\n<br>";
    print "this is the file url: '" . $target_file_url . "'\n<br>";
    print "this is the fax_number: " . $fax_number . "\n<br>";
    print "this is the twilioNumber: " . $twilioNumber . "\n<br>";

    $fax = $twilio->fax->v1->faxes
        ->create($fax_number, // to
		 $target_file_url, // mediaUrl
		 array("from" => $twilioNumber)
                );

    print($fax->sid);
    $fax_status_url = "ShowOneFax.php?sidFax=" . $fax->sid;

} else {
   print "nice day ain't it?";
}


?>

<br>
    <a href="listfax.php">See status of all faxes</a>

<br>

<?php
print "<a href='" . $fax_status_url . "'>";
print "See status of this fax</a>";
    ?>
    





