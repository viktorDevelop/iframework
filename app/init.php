<?php
spl_autoload_register(function ($class){
    $path = $_SERVER['DOCUMENT_ROOT'].'/'.str_replace('\\','/',$class);
    $path .= '.php';
    if (file_exists($path)){
        include $path;
    }

});

//$r = new \core\Router();
//$r->init();

$router = new \core\Router();
$router->init();