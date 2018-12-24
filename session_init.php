<?php

	
    session_start();
    if (!isset($_SESSION["initialized"]))
    {
    	print "initializing";
        $_SESSION["initialized"] = true;
        $_SESSION["count"] = 0;
    }
    else
    {
    	print "already initialized";
    }
	print "<br>1 value of session[count].  {$_SESSION["count"]}<br>";

    //$counta = $_SESSION["count"];
    //$temp = $counta;
    $count++;


    function SaveState()
    {
    	if (isset($count))
    	{
	    	print "saving count as $count";
	        $_SESSION["count"] = $count;
	    } else {
	    	print "count isn't set.  {$_SESSION["count"]} ";
	    }


    }
?>