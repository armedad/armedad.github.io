<?php
  $rootdir =  __DIR__ . "/..";

  require_once $rootdir . "/debug.php";
  require_once $rootdir . "/mytwilio.php";

  $target_dir = "pdf/";
  //$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  //http://www.thechewfamily.com/fax/upload.php
  
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]";
  //http://www.thechewfamily.com/fax/upload.php
  $actual_link = substr($actual_link, 0, strrpos($actual_link, '/') + 1);
  //http://www.thechewfamily.com/fax/
  $pdf_folder_url = $actual_link . $target_dir;
  //http://www.thechewfamily.com/fax/pdf/


?>