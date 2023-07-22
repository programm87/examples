
<?php

require_once 'database.php';

if (isset($_POST['record'])) {
    $rec = $_POST['record'];
}

$query = "INSERT INTO ToDo_list(records) value('$rec')";
$db_rec = $dbc->prepare($query);
$db_rec->execute();

header('Location: index.php');
die();
?>

