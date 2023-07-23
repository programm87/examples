<?php

$db_user = 'myuser';
$db_password = '12345';

$db_connect = new PDO("mysql:host=localhost;dbname=examples;charset=utf8;", $db_user, $db_password);
$sql = "SELECT * FROM users";
$result = $db_connect->query($sql);

while ($row = $result->fetch()) {
    echo "<p>{$row['username']} - {$row['password']} - {$row['email']} - {$row['fhone']}</p>";
}

?>

<a href="index.php">home</a>