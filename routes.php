<?php
    require_once 'controllers/AuthController.php';
    require_once 'controllers/WorkerController.php';
    require_once 'controllers/EmpresaController.php';
    require_once 'controllers/ClienteController.php';

    return [
        'defaultRoute' => ['GET', 'AuthController', 'index'],

        'auth' => [
            'home' => ['GET', 'AuthController', 'home'],
            'index' => ['GET', 'AuthController', 'index'],
            'login' => ['POST', 'AuthController', 'login'],
            'logout' => ['GET', 'AuthController', 'logout'],
        ],

        'worker' => [
            
            'edit' => ['GET', 'WorkerController', 'edit'],
            'update' => ['POST', 'WorkerController', 'update'],
            'create' => ["GET", 'WorkerController', 'create'],
            'store' => ["POST", 'WorkerController', 'store'],
            'delete' => ['GET', 'WorkerController', 'delete'],
        ],
        'cliente' => [
            'home' => ['GET', 'ClienteController', 'home'],
            'show' => ['GET', 'ClienteController', 'show'],
            'edit' => ['GET', 'ClienteController', 'edit'],
            'update' => ['POST', 'ClienteController', 'update'],
            'create' => ["GET", 'ClienteController', 'create'],
            'store' => ["POST", 'ClienteController', 'store'],
            'delete' => ['GET', 'ClienteController', 'delete'],
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