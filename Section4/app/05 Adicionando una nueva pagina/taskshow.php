<?php
require_once 'db.php';

$task = get_task_by_id($_GET['id']);

require 'templates/taskshow.php';