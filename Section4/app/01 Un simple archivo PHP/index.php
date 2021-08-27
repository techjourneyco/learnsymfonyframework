<?php
// index.php
$connection = new PDO("mysql:host=mysql;dbname=techjourney", 'root', '1234');

$result = $connection->query('SELECT id, description FROM task');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lista de tareas</title>
    </head>
    <body>
        <h1>Lista de tareas</h1>
        <ul>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <li>
                <a href="/show.php?id=<?= $row['id'] ?>">
                    <?= $row['description'] ?>
                </a>
            </li>
            <?php endwhile ?>
        </ul>
    </body>
</html>

<?php
$connection = null;
?>