<?php
    require_once 'controllers/HomeController.php';

    return [
        'defaultRoute' => ['GET', 'HomeController', 'index'],

        'home' => [
            'index' => ['GET', 'HomeController', 'index']
        ]
    ];
?>