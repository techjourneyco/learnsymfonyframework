<?php
// index.php
$connection = new PDO("mysql:host=mysql;dbname=techjourney", 'root', '1234');

$result = $connection->query('SELECT id, description FROM task');

$tasks = [];
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $tasks[] = $row;
}

$connection = null;

// include the HTML presentation code
require 'templates/tasklist.json.php';