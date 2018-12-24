<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" x-undefined>
<title>New Page 1</title>
<!--mstheme--><link rel="stylesheet" type="text/css" href="../_themes/sky/sky1011.css"><meta name="Microsoft Theme" content="sky 1011, default">
</head>

<body>

<?php
	require "db.inc";
	$status = mysqlclean($_GET, "result", 1, $dbConnect);
	
	switch ($status)
	{
		case "T":
			$id = mysqlclean($_GET, "record_id", 5, $dbConnect);
			print "Insert succeeded<br>";
			print "Record_ID = $id<br>";
			$query = "SELECT * FROM People WHERE record_id = {$id}";
			if (!($record_id= @mysql_query($query, $dbConnect)))
				showerror();
				
			$row = mysql_fetch_array($record_id);
			print_r($row);
			break;
			
		case "F":
			// insert failed
			print "Insert failed<br>";
			
			break;
			
		default:
			// improper use
			print "Improper use.  no <b>result</b> value set.<br>";
			break;
	}
	
?>

</body>

</html>
