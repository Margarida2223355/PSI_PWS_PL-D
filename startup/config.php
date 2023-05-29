<?php
    require_once './vendor/autoload.php';

    define('APP_NAME', 'Folha de Obra');
    define('INVALID_ACCESS_ROUTE', 'c=home&a=index');

    //Ligação à base de dados
    ActiveRecord\Config::initialize(function($cfg) {
        $cfg -> set_model_directory('./models');
        $cfg -> set_connections(
            array (
                'development' => 'mysql://root@localhost/projeto',
            )
            );
    });
?>