<?php
	require 'db.inc';
	
	$input = "Name = '{$_POST["Name"]}', Gender = '{$_POST["Gender"]}'";
	
	$result = mysql_query( "INSERT INTO People SET {$input}", $dbConnect);

	if ($result)
	{
		// if it was successful, set the location so that folks don't re-load and re-submit this query
		header("Location: after_insert.php?result=T&".
				"record_id=". mysql_insert_id($dbConnect));
	} 
	else
	{
		header("Location: after_insert.php?result=F");
	}
?>
