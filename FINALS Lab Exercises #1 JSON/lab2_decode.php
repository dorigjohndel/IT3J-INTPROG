<?php
$jsonString = '{"name":"Dorig, Johndel B.","age":20,"email":"dorigjohndel9@gmail.com"}';

$phpObject = json_decode($jsonString);

$phpArray = json_decode($jsonString, true);

echo "Object: " . $phpObject->name . "<br>";
echo "Array: " . $phpArray['email'];
?>
