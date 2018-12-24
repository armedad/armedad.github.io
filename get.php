<?php

	if (!isset($_SERVER["PHP_AUTH_USER"]) ||
		!isset($_SERVER["PHP_AUTH_PW"]) )
	{
		header("WWW-Authenticate: Basic realm=\"chewfamily subsite1\"");
		header("HTTP/1.1 401 Unauthorized");
		
		print "noauth";
	}
	else
	{
		if (!isset($_SERVER["PHP_AUTH_PW"]))
			print "nopw";
		else
			print "authenticated";
	}
	
?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
<meta name="Microsoft Theme" content="sky 1011, default">
</head>


<body>
<?php

// http://www.thechewfamily.com/subsite/get.php?Arg1=Christine&Arg2=Chee
// http://www.thechewfamily.com/subsite/get.php?Arg1[]=Christine&Arg1[]=Chee
	print "input arg1 is {$_GET["Arg1"]}\n";
	print_r ($_GET);
	
	
	printf ("post: \n");
	print_r ($_POST);
	
	$_SERVER["PHP_AUTH_PW"] = "testpw";
	$_SERVER["PHP_AUTH_USER"] = "user";
	
	print "<br><br>";
	   	print_r($_SERVER);

?>

</body>

</html>
