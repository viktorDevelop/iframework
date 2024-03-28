<?php

$routes = [];
$routes = [
    [
        'pathUrl'=>'/',
        'controller'=>\controllers\MainController::class
    ],
    [
        'pathUrl'=>'/category/:title/:post',
        'controller'=>\controllers\CategoryController::class
    ],

    [
        'pathUrl'=>'/category/:title',
        'controller'=>\controllers\CategoryController::class
    ],

    [
        'pathUrl'=>'/category',
        'controller'=>\controllers\CategoryController::class
    ]

];

return $routes;