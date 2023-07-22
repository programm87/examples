<?php

require_once 'database.php';

$id = $_GET['id'];

$query = "DELETE FROM `ToDo_list` WHERE `id`=?";
$db_rec = $dbc->prepare($query);
$db_rec->execute([$id]);

header('Location: /');
?>

