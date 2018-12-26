<?php
	require_once "sms.php";
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
<meta name="Microsoft Theme" content="sky 1011, default">
</head>

<body>
the body
<?php

	print "before sms create<br>";
        print_r($client);
	print "<br>";

	TextToNumber('+14582243324', "hello sms world!");
	print "after sms create<br>";
?>

</body>
</html>
