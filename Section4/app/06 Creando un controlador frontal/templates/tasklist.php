<?php $title = 'Lista de tareas' ?>

<?php ob_start() ?>
    <h1>Lista de tareas</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
        <li>
            <a href="index.php/taskshow?id=<?= $task['id'] ?>">
                <?= $task['title'] ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>