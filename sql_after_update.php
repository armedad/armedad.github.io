<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" x-undefined>
<title>New Page 1</title>
<!--mstheme--><link rel="stylesheet" type="text/css" href="../_themes/sky/sky1011.css"><meta name="Microsoft Theme" content="sky 1011, default">
</head>

<body>

<?php
	require "db.inc";
	
	$record_id= mysqlclean($_GET, "record_id", 10, $dbConnect);
	
	print "Updated record {$record_id}";
?>


<a href="php_sql.php"> Restart</a>

</body>

</html>
