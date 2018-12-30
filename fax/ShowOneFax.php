<html>
<?php
require_once "init.php";
?>

<body>

<a href="listfax.php">Go back to full list of faxes.</a> <br>

<table border=1>
<tr>
<th>To</th>
<th>File</th>
<th>Date</th>
<th>Time</th>
<th>Status</th>
<th>In/Out</th>
<th>sid</th>
<th>price</th>
</tr>


<?php
$sid_fax = $_GET["sidFax"];
$record = $twilio->fax->v1->faxes($sid_fax)->fetch();

    $url = $record->url;

    print "<tr>\n";
    
    print "<td>\n";
    print($record->to);
    print "</td>\n";

    print "<td>\n";
    print "<a href='" . $record->mediaUrl . "'>twilio url</a>";
    print "<br>\n";

    $record->dateCreated->setTimeZone(new DateTimeZone("America/Los_Angeles"));

    print "<td>\n";
    print ($record->dateCreated->format('Y-m-d'));
    print "</td>\n";

    print "<td>\n";
    print ($record->dateCreated->format('H:i'));
    print " PST</td>\n";
    print "</td>\n";

    print "<td>\n";
    print($record->status);
    print "</td>\n";

    print "<td>\n";
    print($record->direction);
    print "</td>\n";

    print "<td>\n";
    print "<a href='" . $url . "'>";
    print($record->sid);
    print "</a>";
    print "</td>\n";

    print "<td>\n";
    print($record->price);
    print "</td>\n";
    print "</tr>\n";


?>

</table>

<br>
<br>
<br>
<br>
    <br>
    <font size=1>
    <?php
print_r ($record);
    ?>
    </font>


</body>
</html>
