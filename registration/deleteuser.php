<?php

echo 'hay';

$db_user = 'myuser';
$db_password = '12345';

$db_connect = new PDO("mysql:host=localhost;dbname=examples;charset=utf8;", $db_user, $db_password);
$sql = "DELETE FROM users WHERE id = :id";
$stmt = $db_connect->prepare($sql);
$stmt->bindValue(":id", $_GET['id']);
$stmt->execute();

header( "Location: /registration/users.php" );