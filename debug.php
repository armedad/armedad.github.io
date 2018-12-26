<?php
	$DEBUGLEVEL = 100000;
	$DEBUGTRACE = 100;
	
	function DebugMsg($num, $msg) {
		 global $DEBUGLEVEL;
		 if ($num >= $DEBUGLEVEL) {
		    print "DEBUGMSG: " . $msg . "<br>\n";
		 }
	}
?>