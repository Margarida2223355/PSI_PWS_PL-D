<?php
    use Auth as GlobalAuth;

    //Definir credenciais do administrador
    const ADMIN = 'pws';
    const PASS = '123';

    class Auth {
        //Iniciar a sessão no construtor da classe Auth
        public function __construct() {
            session_start();
        }

        //Método para fechar sessão
        public function logout() {
            session_destroy();
        }
    }
?>