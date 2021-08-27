<!DOCTYPE html>
<html>
    <head>
        <title>Lista de tareas</title>
    </head>
    <body>
        <h1>Lista de tareas</h1>
        <ul>
            <?php foreach ($tasks as $task): ?>
            <li>
                <a href="/show.php?id=<?= $task['id'] ?>">
                    <?= $task['description'] ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>