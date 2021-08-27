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

    $result = $connection->query('SELECT id, description FROM task');

    $tasks = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $tasks[] = $row;
    }
    close_database_connection($connection);

    return $tasks;
}
