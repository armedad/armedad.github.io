<?php
	require_once "init.php";
?>
<?php

use Twilio\Twiml;

$response = new Twiml;
$body = $_REQUEST['Body'];
$default = "I just wanna tell you how I'm feeling - Gotta make you understand";
$options = [
  "give you up",
  "let you down",
  "run around and desert you",
  "make you cry",
  "say goodbye",
  "tell a lie, and hurt you"
  ];

if (strtolower($body) == 'never gonna') {
    $response->message($options[array_rand($options)]);
} else {
    $response->message($default);
}
print $response;
  /// text to game control
  TextGameControl("IncomingHandler body: " . $body . "\n" . $response);
?>
