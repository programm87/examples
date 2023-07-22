<?php

require './funcs.php';

//dAd($_POST);

$username = $_POST["username"];
$password = $_POST["password"];

$db_user = 'myuser';
$db_password = '12345';

$db_connect = new PDO("mysql:host=localhost;dbname=examples;charset=utf8;", $db_user, $db_password);
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$db_connect->exec($sql);