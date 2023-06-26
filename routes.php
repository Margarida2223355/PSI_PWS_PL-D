<?php
    require_once 'controllers/AuthController.php';
    require_once 'controllers/WorkerController.php';
    require_once 'controllers/EmpresaController.php';

    return [
        'defaultRoute' => ['GET', 'AuthController', 'index'],

        'auth' => [
            'index' => ['GET', 'AuthController', 'index'],
            'login' => ['POST', 'AuthController', 'login'],
            'logout' => ['GET', 'AuthController', 'logout'],
        ],

        'worker' => [
            'edit' => ['GET', 'WorkerController', 'edit'],
            'update' => ['POST', 'WorkerController', 'update'],
            'create' => ["GET", 'WorkerController', 'create'],
            'store' => ["POST", 'WorkerController', 'store'],
        ],
        'empresa' => [
            'index' => ['GET', 'EmpresaController', 'index'],
            'show' => ['GET', 'EmpresaController', 'show'],
            'edit' => ['GET', 'EmpresaController', 'edit'],
            'create' => ['GET', 'EmpresaController', 'create'],
            'store' => ['POST', 'EmpresaController', 'store'], 
            'update' => ['POST', 'EmpresaController', 'update'],
            'delete' => ['GET', 'EmpresaController', 'delete'],
        ],
    ];
?>