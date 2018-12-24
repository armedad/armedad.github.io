<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" x-undefined>
<title>New Page 1</title>
<!--mstheme--><link rel="stylesheet" type="text/css" href="../_themes/sky/sky1011.css"><meta name="Microsoft Theme" content="sky 1011, default">
</head>
<body>

<?php
	require "db.inc";
	$record_id = mysqlclean($_GET, "record_id", 10, $dbConnect);
	print "$record_id<br>";
	$query = "SELECT * FROM People WHERE record_id = {$record_id}";
	$queryResult= @mysql_query($query, $dbConnect);
	print_r($queryResult);
	$row = mysql_fetch_array($queryResult);
	print_r($row);
	print "<br>";
	
?>

	<form action="sql_do_update.php" method = "POST">
	Name: 
	
<?php

	print "<input type = \"text\" name=\"Name\" value=\"{$row["Name"]}\">";
	newline();

	/// Gender
	$genderMale = false;
	$genderFemale = false;
	if ($row["Gender"] == 0)
	{
		$genderFemale = "SELECTED";
		print "genderFemale";
	}
	else
	{
		$genderMale = "SELECTED";
		print "genderMale";
	}

	print "$genderMale + $genderFemale";
	
	print "{$gender}Gender: <select name=\"Gender\" value=\"{$gender}\">";
	print "<option value = \"true\"	{$genderMale}>Male</option>".
		"<option value = \"false\" {$genderFemale}>Female</option>".
		"</select>";

	newline();
		
	print "Hair: <input type=text name=Hair value=\"{$row["Hair"]}\">";

	print "<input type=hidden name=record_id value={$record_id}>";
	
	
	
?>
	<input type="submit" value="update">
	
	</form>





</body>

</html>
