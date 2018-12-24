<?php
	require "db.inc";

	$Gender = mysqlclean($_POST, "gender", 10, $dbConnect);
	$Name = mysqlclean($_POST, "Name", 80, $dbConnect);
	$Hair = mysqlclean($_POST, "Hair", 10, $dbConnect);
	$record_id= mysqlclean($_POST, "record_id", 10, $dbConnect);
	
	$query = "UPDATE People SET Name = '{$Name}' ,
				Hair = '{$Hair}',
				Gender = '{$Gender}' 
				WHERE record_id = {$record_id}";
				
		
	if (mysql_query($query, $dbConnect))
	{
		header("Location: sql_after_update.php?status=T&record_id={$record_id}");
	}
	else
	{
		showerror();
		header("Location: sql_after_update.php?status=F&record_id={$record_id}");
	}
	
?>
