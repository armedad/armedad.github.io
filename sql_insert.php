<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" x-undefined>
<title>New Page 1</title>
<!--mstheme--><link rel="stylesheet" type="text/css" href="../_themes/sky/sky1011.css"><meta name="Microsoft Theme" content="sky 1011, default">
</head>

<body>

<?php
	require 'db.inc';
	
	print "input arg1 is :<br>{$_GET["Arg1"]}<br><hr>";
	print_r ($_GET);
	
	
	printf ("<br><hr><br>post: \n");
	print_r ($_POST);

	$input = "Name = '{$_POST["Name"]}', Gender = '{$_POST["Gender"]}'";
	
	print "<br>input is: $input";
	

	$testprint = sprintf("<br>%d %x %s",1,10,"this is a test");
	print $testprint;
	print "<br>";
	print "INSERT INTO People SET {$input}";
	$result = mysql_query( "INSERT INTO People SET {$input}", $dbConnect);

	if ($result)
	{
		// if it was successful, set the location so that folks don't re-load and re-submit this query
		header("Location: after_insert.php?result=T&".
				"insert_id = ". mysql_insert_id($dbConnect));
	} 
	else
	{
		header("Location: after_insert.php?result=F");
	}
?>

	<form action="php_sql.php" method="GET">
	<input type="submit" value="return">
	</form>


</body>

</html>
