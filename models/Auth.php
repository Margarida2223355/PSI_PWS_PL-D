<?php
    use Auth as GlobalAuth;

    class Auth {
        //Iniciar a sessão no construtor da classe Auth
        public function __construct() {
            //Iniciar a sessão apenas se a mesma não existir
            if(!isset($_SESSION['id'])) {
                session_start();
            }
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
            $user_found = User::find_by_username_and_password($user, $pass);

            /* Se o $user for diferente de null
             * Guardar em variáveis de sessão (S_SESSION)
             * id, username e password.
            */
            if($user_found != null) {
                $_SESSION['id'] = $user_found->id;
                $_SESSION['username'] = $user_found->username;
                $_SESSION['role'] = $user_found->role;

                return true;
            }

            else {
                return false;
            }
        }

        //Método para devolver o Role do utilizador (administrador, funcionário ou cliente)
        public function getRole() {
            return $_SESSION['role'];
        }

        //Método para devolver o Id do utilizador
        public function getId() {
            return $_SESSION['id'];
        }

        //Método para devolver o Username do utilizador
        public function getUsername() {
            return $_SESSION['username'];
        }
    }
?>