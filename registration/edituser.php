
<form method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>    
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="fhone" class="form-label">Fhone</label>
        <input type="tel" class="form-label" id="fhone" name="fhone" required>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>

<?php
require './funcs.php';

//dAd($_GET['id']);
dump($_GET['id']);
dump($_POST);
$id = $_GET['id'];
$db_user = 'myuser';
$db_password = '12345';

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

$db_connect = new PDO("mysql:host=localhost;dbname=examples;charset=utf8;", $db_user, $db_password);
$sql = "UPDATE users SET username = :username, password = :password, email = :email, fhone = :fhone WHERE id = :id";
$stmt = $db_connect->prepare($sql); // подготовка запроса, еще без данных
$stmt->bindValue(':username', $username);
$stmt->bindValue(':password', $password);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':fhone', $fhone);
$stmt->bindValue(':id', $id);
$stmt->execute();

echo $id;
header( "Location: /registration" );
?>

