<?php
use \Firebase\JWT\JWT;
include 'vendor/autoload.php';

$key = "123456";

$payload = array(
    "name" => "Rabbil Hasan",
    "pass" => "123456789",
    "mobile" => "01785388919",
    "city" => "Dhaka"
);


$encodedString=JWT::encode($payload,$key);

echo $encodedString;

?>