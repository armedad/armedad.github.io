<?php

//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//print "URL: " . $actual_link . "<br>\n";
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]";
print "URL: " . $actual_link . "<br>\n";
//http://www.thechewfamily.com/fax/upload.php
$actual_link = substr($actual_link, 0, strrpos($actual_link, '/') + 1);
//http://www.thechewfamily.com/fax/
print "URL: " . $actual_link . "<br>\n";


$target_dir = "pdf/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 0;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

print_r($_POST);
print "<br>\nhiddenvar :";
print_r($_POST['hiddenvar']);
print "<br>\n";
print $target_dir;
print "<br>\n";
print $target_file;
print "<br>\n";



if(isset($_POST["submit"])) {
    $uploadOk = 1;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, no file to upload.";
} else {
    // if everything is ok, try to upload file
    /*
    print "move_uploaded_file:<br>\n";
    print ($_FILES["fileToUpload"]["tmp_name"]);
    print "<br>\n";
    print ($target_file);
    print "<br>\n";
    */

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<form action="sendfax.php" method="post" enctype="multipart/form-data">
<?php
print "<input type=\"hidden\" name=\"fileToUpload\" value=\"$target_file\">"
    ?>
    
    <br>
    <input type="submit" value="sendFax" name="submit">
</form>
