<?php
function list_action()
{
    $tasks = get_all_tasks();
    require 'templates/tasklist.php';
}

function show_action($id)
{
    $task = get_task_by_id($id);
    require 'templates/taskshow.php';
}