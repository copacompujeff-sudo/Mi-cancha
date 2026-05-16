<?php

declare(strict_types=1);
session_name((require __DIR__ . '/../config/config.php')['session_name']);
session_start();

date_default_timezone_set((require __DIR__ . '/../config/config.php')['timezone']);

spl_autoload_register(function ($class): void {
    foreach (['../app/controllers/', '../app/models/'] as $dir) {
        $file = __DIR__ . '/' . $dir . $class . '.php';
        if (file_exists($file)) {
            require $file;
            return;
        }
    }
});
require __DIR__ . '/../app/helpers/functions.php';

$routes = require __DIR__ . '/../config/routes.php';
$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = str_replace('/SICAM/public', '', $uri) ?: '/';
$target = $routes[$method][$uri] ?? null;
if ($target === null) { http_response_code(404); exit('Ruta no encontrada'); }
[$controller, $action] = $target;
(new $controller())->$action();
