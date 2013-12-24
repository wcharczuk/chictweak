<?php
header("Content-type: application/json");

$eid = $_REQUEST["eid"];

$firstname = $_REQUEST["firstname"];
$lastname = $_REQUEST["lastname"];

file_get_contents("http://www.chictweak.com/index.php?file=Ajax_News_Letter_SignUp&eid=" . $eid . "&firstname=" . $firstname . "&lastname=". $lastname);
?>
{ "response" : "ok!" }
<?php flush(); ?>