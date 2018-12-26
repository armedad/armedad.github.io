
<?php
	require_once "init.php";
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
<meta name="Microsoft Theme" content="sky 1011, default">
</head>

<body>
<?php
	$DEBUGLEVEL = $DEBUGTRACE;

	DebugMsg($DEBUGTRACE, "before sms send");
        DebugMsg($DEBUGTRACE, $client);

	TextToNumber('+14582243324', "hello sms world!");
        DebugMsg($DEBUGTRACE, "after sms send");

?>

</body>
</html>
