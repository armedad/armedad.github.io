<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" x-undefined>
<title>New Page 1</title>
<!--mstheme--><link rel="stylesheet" type="text/css" href="../_themes/sky/sky1011.css"><meta name="Microsoft Theme" content="sky 1011, default">
</head>

<body>
<?php
// SQL stuff

	require 'db.inc';
	$result = mysql_query( "SELECT Name, Gender FROM People", $dbConnect);
	
	print "results" . " affected rows: ". mysql_affected_rows();
	newline();
	print_r($result);
	newline();
	print "end results";
	newline();
	
	if ($result == null)
	{
		print "null results<br>";
	} else
	{
	

		$info = mysql_fetch_field($result);
		print str_pad($info->name, 20);
		print "<br>";
		print str_pad($info->type, 6);
		print "<br>";
		
					
		while ($row = mysql_fetch_array($result, MYSQL_NUM))
		{

			foreach($row as $attribute)
				print "$attribute ";

			print "<br>";
		}

		$result = mysql_query("SELECT record_id, Name, Birth, Hair FROM People", $dbConnect);
		
		print "te\"st<br>";
		
		while($row = mysql_fetch_array($result))
		{
			print "The <a href=\"sql_update.php?record_id={$row["record_id"]}\">{$row["Name"]} has a birthdate of {$row["Birth"]}</a> <br>";
			print_r($row);
			print "<br>";
			print "<br>";

		}
	}
	print "<br>end of db<br>";
	
	function selectDistinct($connection, $tableName, $attributeName, $pulldownName, $defaultValue)
	{
		$defaultWithinResultSet = FALSE;
		
		$distinctQuery = "SELECT DISTINCT {$attributeName} FROM {$tableName}";
	
		if (!($resultId = @ mysql_query($distinctQuery, $connection)))
			showerror();
				
		// build the select control
		print "\n<select name=\"{$pulldownName}\">";
		
		
		
		while ($row = @ mysql_fetch_array($resultId))
		{
			$result = $row[$attributeName];
			
			if (isset($defaultValue) && $result == $defaultValue)
			{
				// this is the default value, so select it
				print "\n\t<option selected value =\"{$result}\">{$result}";
			
			} 
			else
			{
				print "\n\t<option value =\"{$result}\">{$result}";
			}
			
			print "</option>";
			
		}
		
		print "</select>";
		
		
	}
	
?>
	
	<!--
	/// query the database
	// get.php
	-->
	
	<form action="get.php?get1=dbasename" method="POST">
	pick a hair color: 
	<?php
		selectDistinct($dbConnect, "People", "Hair", "Hair Color", NULL);
		selectDistinct($dbConnect, "People", "Gender", "Gender", NULL);		
	?>
	<input type="hidden" name="hiddenarg" value="hiddenvalue">
	<input type="submit" value="query">
	</form>

	<br>	

	<!--
	///inserting a new item
	// sql_insert.php
	///	<form action="sql_insert.php" method = "POST">
	-->
	<form action="sql_insert_redirect.php" method = "POST">
	Insert Data:
	Name: <input type = "text" name="Name" value="name">
	<br>
	Gender: <select name="Gender">
	<option value = "true">Male
	<option value = "false">Female
	</option>
	</select>
	<?php
	
/*	
		if (!($resultId = @ mysql_query("INSERT INTO People SET Hair = 'Black', Gender = 1, Name = 'Owen';", $dbConnect)))
		{
			showerror();
		}
*/
	?>


	<input type="submit" value="insert">
	
	</form>

	<form action="sql_delete.php?action=clear" method="POST">
	<input type="submit" value="reset">
	</form>

</body>

</html>
