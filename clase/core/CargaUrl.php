<?php

$url = isset($_GET['url']) ? explode('/', filter_var(trim($_GET['url'],'/'), FILTER_SANITIZE_URL)) : [];

$controller = !empty($url[0]) ? ucfirst($url[0]) . 'Controller' : 'HomeController';
$method = !empty($url[1]) ? $url[1] : 'index';
$params = array_slice($url, 2);

$controllerPath = '../clase/controller/' . $controller . '.php';

if (file_exists($controllerPath)) {
    require_once $controllerPath;
    $controllerInstance = new $controller();

    if (method_exists($controllerInstance, $method)) {
        call_user_func_array([$controllerInstance, $method], $params);
    } else {
        echo "Method '$method' not found in controller '$controller'.";
    }
} else {
    echo "Controller '$controller' not found.'";
}
