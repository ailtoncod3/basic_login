<?php
session_start();

define('CONTROL', true);

$loggedUser = $_SESSION['user'] ?? null;

if(empty($loggedUser)){
    $route = 'login';
}else{
    $route = $_GET['route'];
}

$routes = [
    'login' => 'login.php',
    'home' => 'home.php',
    'logout' => 'logout.php'
];

if(!key_exists($route, $routes)) {
    die('<h1>Access denied<h1>');
}

require_once($routes[$route]);