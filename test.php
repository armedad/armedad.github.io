<?php
	require __DIR__ . "/debug.php";
	   $var_test = "test";

	   DebugMsg($DEBUGTRACE, "test");
	   $DEBUGLEVEL = $DEBUGTRACE;
	   DebugMsg($DEBUGTRACE, "test2");
?>