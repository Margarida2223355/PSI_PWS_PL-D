<?php
    require_once './controllers/Controller.php';
    require_once './models/Auth.php';

    class AuthController extends Controller {
        public function __construct() {
            $this -> autheticationFilter();
        }

        public function index() {
            $this -> renderView('auth', 'index');
        }

        public function home(){
            $this -> renderView('auth','home');
        }
        //Método para efetuar o login
        public function login() {
            $user = $_POST['fuser'];
            $pass = $_POST['fpass'];

            $auth = new Auth();

            //Verificar as credenciais -> checkAuth
            if($auth -> checkAuth($user, $pass)) {
                //Se houver utilizador, mostra outra vista
                $this -> renderView('auth', 'home');
            }

            else {
                $this -> renderView('auth', 'index');
            }
        }

        //Método para efetuar o logout
        public function logout() {
            $auth = new Auth();
            $auth -> logout();

            //Mostrar a vista de Auth
            $this -> renderView('auth', 'index');
        }
    }
?>