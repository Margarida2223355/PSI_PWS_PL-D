<?php
    require_once 'controllers/AuthController.php';
    require_once 'controllers/WorkerController.php';

    return [
        'defaultRoute' => ['GET', 'AuthController', 'index'],

        'auth' => [
            'index' => ['GET', 'AuthController', 'index'],
            'login' => ['POST', 'AuthController', 'login']
        ],

        'worker' => [
            'index' => ['GET', 'WorkerController', 'index'],
            'update' => ['POST', 'WorkerController', 'update']
        ]
    ];
?>