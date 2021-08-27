<?php $title = $task['title'] ?>

<?php ob_start() ?>
    <h1><?= $task['title'] ?></h1>

    <div class="date"><?= $task['duedate'] ?></div>
    <div class="body">
        <?= $task['content'] ?>
    </div>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>