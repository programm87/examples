

<?php

echo $_SERVER["REQUEST_METHOD"] . '<br>';
$id = $_GET['id'];

$db_user = 'myuser';
$db_password = '12345';

$db_connect = new PDO("mysql:host=localhost;dbname=examples;charset=utf8;", $db_user, $db_password);
$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $db_connect->prepare($sql);
$stmt->bindValue(":id", $id);
$stmt->execute();

$user = array();
while ($row = $stmt->fetch()) {
    $user['username'] = $row['username'];
    $user['password'] = $row['password'];
    $user['email'] = $row['email'];
    $user['fhone'] = $row['fhone'];
}
//printAr($user);

if ($_POST) {
    require './edituser.php';
}
    
?>

<form method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?=$user['username']?>" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="<?=$user['password']?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>    
        <input type="email" class="form-control" id="email" name="email" value="<?=$user['email']?>" required>
    </div>
    <div class="mb-3">
        <label for="fhone" class="form-label">Fhone</label>
        <input type="tel" class="form-label" id="fhone" name="fhone" value="<?=$user['fhone']?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>