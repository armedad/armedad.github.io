<?php
	$dbConnect = mysql_connect("mysql8.ixwebhosting.com", "cheeche_revuser", "R3v83w");
	mysql_select_db("cheeche_test", $dbConnect);

   // This file is the same as example 6-7, but includes mysqlclean() and shellclean() 

   function showerror()
   {
      die("Error " . mysql_errno() . " : " . mysql_error());
   }

	// arrag = array of text (e.g. $_GET)
	// index = subitem within the array (e.g. for $_GET["userinput"], set index = "userinput"
	// maxlength = maximum length of input
	// connection = result from mysql_connect;
	
   function mysqlclean($array, $index, $maxlength, $connection)
   {
     if (isset($array["{$index}"]))
     {
        $input = substr($array["{$index}"], 0, $maxlength);
        $input = mysql_real_escape_string($input, $connection);
        return ($input);
     }
     return NULL;
   }

   function shellclean($array, $index, $maxlength)
   {
     if (isset($array["{$index}"]))
     {
       $input = substr($array["{$index}"], 0, $maxlength);
       $input = EscapeShellArg($input);
       return ($input);
     }
     return NULL;
   }
   
   function newline()
   {
   		print "<br>";
   }
   
?>
