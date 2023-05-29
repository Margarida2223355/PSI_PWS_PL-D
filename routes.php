<?php
    require_once 'controllers/HomeController.php';

    return [
        'defaultRoute' => ['GET', 'HomeController', 'index'],

        'auth' => [
            'index' => ['GET', 'HomeController', 'index']
        ]
    ];
?>