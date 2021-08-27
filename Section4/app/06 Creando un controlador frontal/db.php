<?php
function open_database_connection()
{
    $connection = new PDO("mysql:host=mysql;dbname=techjourney", 'root', '1234');

    return $connection;
}

function close_database_connection(&$connection)
{
    $connection = null;
}

function get_all_tasks()
{
    $connection = open_database_connection();

    $result = $connection->query('SELECT id, title FROM task');

    $tasks = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $tasks[] = $row;
    }
    close_database_connection($connection);

    return $tasks;
}

function get_task_by_id($id)
{
    $connection = open_database_connection();

    $query = 'SELECT duedate, title, content FROM task WHERE id=:id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $row = $statement->fetch(PDO::FETCH_ASSOC);

    close_database_connection($connection);

    return $row;
}