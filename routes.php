<?php
    require_once 'controllers/AuthController.php';

    return [
        'defaultRoute' => ['GET', 'AuthController', 'index'],

        'auth' => [
            'index' => ['GET', 'AuthController', 'index'],
            'login' => ['POST', 'AuthController', 'login']
        ]
    ];
?>