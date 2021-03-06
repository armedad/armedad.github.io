<?php

	require_once "init.php";

$DEBUGLEVEL = $DEBUGTRACE;
?>
<html>

<body>

<?php

$samplepdf = "https://drive.google.com/file/d/1NtGnW3Besh-VD9bpp8iJL-9ecGaAqNI5/view?usp=sharing";

$faxes = $twilio->fax->v1->faxes
                         ->read();


?>

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

foreach ($faxes as $record) {
    $url = "ShowOneFax.php?sidFax=" . $record->sid;

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

    print "<br>\n";
}

print "<br>\n";

/*
foreach ($faxes as $record) {
    print "<hr>\n";
    print_r($record);
    print "<br>\n";
}
*/

?>

</table>

</body>
</html>