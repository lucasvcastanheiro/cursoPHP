<?php 

function resolve($route) {
    $path = $_SERVER['PATH_INFO'] ?? '/'; // /admin

    $route = '/^' . str_replace('/', '\/', $route) . '$/';

    if(preg_match($route, $path, $params)) {
        return $params;
    }

    return false;
}
