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

        /* Método para verificar as credenciais
         * Devolve true se existir as credenciais
         * Devolve false se não existir
        */
        public function checkAuth($user, $pass) {
            //Encontrar o User com as credenciais $user e $pass na base de dados
            $user = User::find_by_username_and_password($user, $pass);

            /* Se o $user for diferente de null
             * Guardar em variáveis de sessão (S_SESSION)
             * id, username e password.
            */
            if($user != null) {
                $_SESSION['id'] = $user->id;
                $_SESSION['username'] = $user->username;
                $_SESSION['role'] = $user->role;

                return true;
            }

            else {
                return false;
            }
        }

        //Método para devolver o Role do utilizador (administrador ou funcionário)
        public function getRole() {
            return $_SESSION['role'];
        }
    }
?>