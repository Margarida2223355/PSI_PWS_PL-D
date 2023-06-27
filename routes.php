<?php
    require_once 'controllers/AuthController.php';
    require_once 'controllers/WorkerController.php';
    require_once 'controllers/EmpresaController.php';
    require_once 'controllers/ClienteController.php';
    require_once 'controllers/ServicoController.php';
    require_once 'controllers/IvaController.php';

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
            'create' => ['GET', 'WorkerController', 'create'],
            'index' => ['GET', 'WorkerController', 'index'],
            'show' => ['GET', 'WorkerController', 'show'],
            'store' => ['POST', 'WorkerController', 'store'],
        ],

        'cliente' => [
            'home' => ['GET', 'ClienteController', 'home'],
            'show' => ['GET', 'ClienteController', 'show'],
            'edit' => ['GET', 'ClienteController', 'edit'],
            'update' => ['POST', 'ClienteController', 'update'],
            'create' => ['GET', 'ClienteController', 'create'],
            'store' => ['POST', 'ClienteController', 'store'],
            'delete' => ['GET', 'ClienteController', 'delete'],
        ],

        'empresa' => [
            'show' => ['GET', 'EmpresaController', 'show'],
            'edit' => ['GET', 'EmpresaController', 'edit'],
            'create' => ['GET', 'EmpresaController', 'create'],
            'store' => ['POST', 'EmpresaController', 'store'], 
            'update' => ['POST', 'EmpresaController', 'update'],
            'delete' => ['GET', 'EmpresaController', 'delete'],
        ],
        'servico' => [
            'show' => ['GET', 'ServicoController', 'show'],
            'edit' => ['GET', 'ServicoController', 'edit'],
            'create' => ['GET', 'ServicoController', 'create'],
            'store' => ['POST', 'ServicoController', 'store'], 
            'update' => ['POST', 'ServicoController', 'update'],
            'delete' => ['GET', 'ServicoController', 'delete'],
        ],
        'iva' => [
            'show' => ['GET', 'IvaController', 'show'],
            'edit' => ['GET', 'IvaController', 'edit'],
            'create' => ['GET', 'IvaController', 'create'],
            'store' => ['POST', 'IvaController', 'store'], 
            'update' => ['POST', 'IvaController', 'update'],
            'delete' => ['GET', 'IvaController', 'delete'],
        ],
    ];
?>