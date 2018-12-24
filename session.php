<?php
    require_once "session_init.php";
	print "<br>2 value of session[count].  {$_SESSION["count"]}<br>";
    $counta++;
    $counta+=3;
	print "<br>3 value of session[count].  {$_SESSION["count"]}<br>";
	print "temp = $temp <br>";
    print "you loaded this page $counta/$count times ";

	print "<br>4 value of session[count].  {$_SESSION["count"]}<br>";
    SaveState();
   	print "<br>5 value of session[count].  {$_SESSION["count"]}<br>";
   	
   	print "<br>username is {$_SERVER["PHP_AUTH_USER"]}";
?>
