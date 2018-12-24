<?php

error_log("email test error", 1, "chee@thechewfamily.com", "more info");
trigger_error("my custom error", E_USER_WARNING);

error_log("log test error", 3, "/hsphere/local/home/cheechew/programming.thechewfamily.com/php/error_log.txt", "more info");



?>