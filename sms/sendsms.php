<?php
	require_once "init.php";
?>
<html>
<body>
<?php
	$DEBUGLEVEL = $DEBUGTRACE;

	DebugMsg($DEBUGTRACE, "before sms send");

  	print $DEBUGLEVEL . "debuglevel\n" . $DEBUGTRACE . "debugtrace\n";
	
	TextToNumber('+14257854866', "hello sms world!");
        DebugMsg($DEBUGTRACE, "after sms send");

?>
</body>
</html>
