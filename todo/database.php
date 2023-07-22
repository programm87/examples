<?php

$host = "mysql:host=localhost;dbname=examples;charset=utf8;";
$login = "myuser";
$password = "12345";


try {
    $dbc = new PDO($host, $login, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
}


