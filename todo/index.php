

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>ToDo list</title>
</head>
<body>
    
	<div class="heading">
		<h2 style="font-style: 'Hervetica';">Список дел на PHP и MySQL</h2>
	</div>
	<form method="post" action="index.php" class="input_form">
		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Создать событие</button>
	</form>
    
    
<?php
var_dump($_POST);
?>

</body>
</html>

<!-- <div class="container">
        <form action="record_db.php" method="POST">
            <input type="text" name="record" required class="form-control">
            <button type="submit">Добавить событие</button>
        </form>

        <ul>
            <?php
            require_once 'database.php';

            $request = $dbc->query("SELECT * FROM ToDo_list");

            while($row = $request->fetch(PDO::FETCH_OBJ)){
                echo '<div><li>' . $row->records 
                    . '</b><a href="/del_db.php?id=' 
                    . $row->id. '"><button>Удалить</button></a></li>' 
                    . '</div></li>';
            }
            ?>

        </ul>
    </div> -->































