<?php

require './funcs.php';
echo realpath('.') . PHP_EOL . '<br>';
echo dirname(__DIR__);
//dAd($_POST);

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$fhone = $_POST["fhone"];

$db_user = 'myuser';
$db_password = '12345';

$db_connect = new PDO("mysql:host=localhost;dbname=examples;charset=utf8;", $db_user, $db_password);
$sql = "INSERT INTO users (username, password, email, fhone) VALUES ('$username', '$password', '$email', '$fhone')";
$db_connect->exec($sql);

header( "Location: /registration" );