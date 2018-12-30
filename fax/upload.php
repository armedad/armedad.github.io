<?php

print "upload.php version 0.04<br><br>\n";

//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//print "URL: " . $actual_link . "<br>\n";
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]";
//print "URL: " . $actual_link . "<br>\n";
//http://www.thechewfamily.com/fax/upload.php
$actual_link = substr($actual_link, 0, strrpos($actual_link, '/') + 1);
//http://www.thechewfamily.com/fax/
//print "URL: " . $actual_link . "<br>\n";


$target_dir = "pdf/";
if (isset($_FILES["fileToUpload"]))
{
    print "<br>\n";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $target_file = str_replace(' ', '_', $target_file);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded and moved to $target_file";
	echo "<br>";
	echo "<br>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

} else {
    $target_file = $target_dir . "Fax_Test.pdf";
    print "file to upload isn't set.  using default";
}

//  now create the url
$target_file_url = $actual_link . $target_file;

?>


<form action="sendfax.php" method="post" enctype="multipart/form-data">

File web location: <br>


<input type="text" name="targetFileUrl" size=80 value=
    <?php print "\"$target_file_url\""; ?>
    >

    <br><br>

<input type="hidden" name="fileToUpload" value=
    <?php print "\"$target_file\""; ?>
    >
    
    Fax Number: (default is HP Fax Me)<br>
    <input type="text" value="+18884732963" name="faxNumber">
    
    <br>
    <input type="submit" value="sendFax" name="submit">
</form>
