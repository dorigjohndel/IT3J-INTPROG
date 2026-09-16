<?php
header('Content-Type: application/json');

$userProfile = [
    "id" => 1,
    "name" => "Dorig, Johndel B.",
    "email" => "dorigjohndel9@gmail.com",
    "status" => "active"
];

echo json_encode($userProfile);
?>
