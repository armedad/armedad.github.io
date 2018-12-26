<?php
	$DEBUGLEVEL = 100000;
	$DEBUGTRACE = 100;
	
	function DebugMsg($num, $msg) {
	    global $DEBUGLEVEL;
	    if ($num >= $DEBUGLEVEL) {
		    if (is_string($msg)) {
		        print "DEBUGMSG: " . $msg . "<br>\n";
		    } else {
		        print "DEBUGMSG: ";
			print_r($msg);
			print "<br>\n";
  		    }
		 }
	}

?>
