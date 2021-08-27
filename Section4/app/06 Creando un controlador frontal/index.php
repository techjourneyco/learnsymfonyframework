<?php

require_once 'db.php';
require_once 'controllers.php';

$baseUrl="/app/06%20Creando%20un%20controlador%20frontal";
// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($baseUrl.'/index.php' === $uri) {
    list_action();
} elseif ($baseUrl.'/index.php/taskshow' === $uri && isset($_GET['id'])) {
    show_action($_GET['id']);
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Pagina no encontrada</h1></body></html>';
}