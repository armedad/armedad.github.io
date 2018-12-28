<?php

	require_once "init.php";

$DEBUGLEVEL = $DEBUGTRACE;
?>
<html>

<body>
<?php

$samplepdf = "https://drive.google.com/file/d/1NtGnW3Besh-VD9bpp8iJL-9ecGaAqNI5/view?usp=sharing";

$faxes = $twilio->fax->v1->faxes
                         ->read();

DebugMsg($DEBUGTRACE, "faxes are " . $faxes );
print_r($faxes);
foreach ($faxes as $record) {
    print($record->sid);
}
?>
</body>
</html>