<?php

require './funcs.php';
echo realpath('.') . PHP_EOL . '<br>';
echo dirname(__DIR__);
//dAd($_POST);

$param_user = array();

if (isset($_POST["username"])) {
    $username = $_POST["username"];
}
if (isset($_POST["password"])) {
    $password = $_POST["password"];
}
if (isset($_POST["email"])) {
    $email = $_POST["email"];
}
if (isset($_POST["fhone"])) {
    $fhone = $_POST["fhone"];
}


$db_user = 'myuser';
$db_password = '12345';

$db_connect = new PDO("mysql:host=localhost;dbname=examples;charset=utf8;", $db_user, $db_password);
$sql = "INSERT INTO users (username, password, email, fhone) VALUES (:username, :password, :email, :fhone)";
$stmt = $db_connect->prepare($sql); // подготовка запроса, еще без данных
$stmt->bindValue(':username', $username);
$stmt->bindValue(':password', $password);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':fhone', $fhone);

$stmt->execute();

header( "Location: /registration" );