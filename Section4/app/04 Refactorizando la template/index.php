<?php
require_once 'db.php';

$tasks = get_all_tasks();

// include the HTML presentation code
require 'templates/tasklist.php';