<?php echo $_SERVER["REQUEST_METHOD"] . '<br>'; ?>

<?php

require './funcs.php';

$db_user = 'myuser';
$db_password = '12345';

$db_connect = new PDO("mysql:host=localhost;dbname=examples;charset=utf8;", $db_user, $db_password);
$sql = "SELECT * FROM users";
$result = $db_connect->query($sql);

$users = array();

while ($row = $result->fetch()) {
    $id = $row['id'];
    $users[$id]['username'] = $row['username'];
    $users[$id]['password'] = $row['password'];
    $users[$id]['email'] = $row['email'];
    $users[$id]['fhone'] = $row['fhone'];
}

//printAr($users);

//foreach ($users as $key => $value) {
//    $arr = getUserArray($users, $key);
//    echo "{$arr['username']} {$arr['password']} {$arr['email']} {$arr['fhone']}". '<br>';
//}

//printAr(getUserArray($users, 4));


?>


<?php foreach ($users as $key => $value) {
    $arr = getUserArray($users, $key); ?>
    <table>
        <tr>
            <td><?= $arr['username'] ?> : </td>
            <td><?= $arr['password'] ?> : </td>
            <td><?= $arr['email'] ?> : </td>
            <td><?= $arr['fhone'] ?> : </td> 
            <td><a href="edituserform.php?id=<?= $key ?>">Update</td>
            <td><a href="deleteuser.php?id=<?= $key ?>">Delete</td>      
        </tr>
    </table>    
<?php } ?>


<br>
<a href="index.php">HOME</a>
