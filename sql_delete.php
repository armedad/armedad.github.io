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

	if ( ! empty($_GET["action"]))
	{
		print 'action = <b>$_GET["action"]</b>';	
		print "<br>";	
		if ( ! strcmp($_GET["action"] , "clear" ))
		{
			print "clearing...<br>";
			
			$result = mysql_query( "DELETE FROM People WHERE TestEntry = 1", $dbConnect);
		}
	}
	else
	{
		print "action is empty";
	}
	
?>


	<form action="php_sql.php" method="GET">
	<input type="submit" value="return">
	</form>


</body>

</html>
