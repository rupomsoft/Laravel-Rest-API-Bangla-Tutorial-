<?php
use \Firebase\JWT\JWT;
include 'vendor/autoload.php';

$key = "123456";
$encodedString="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiUmFiYmlsIEhhc2FuIiwicGFzcyI6IjEyMzQ1Njc4OSIsIm1vYmlsZSI6IjAxNzg1Mzg4OTE5IiwiY2l0eSI6IkRoYWthIn0.c_nREbxMaCQNuIJNTsBpWacvIvkKT-wZScYBtd2Ix40";

$decodedData=JWT::decode($encodedString,$key,array('HS256'));

print_r($decodedData);


?>