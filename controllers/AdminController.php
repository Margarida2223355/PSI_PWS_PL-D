<?php
    require_once './controllers/Controller.php';
    require_once './models/User.php';

    class AdminController extends Controller {
        public function __construct() {
            $this -> authenticationFilter();
        }

        /* Método para abrir formulário do funcionário
         * para que este possa alterar o seu email e/ou
         * a sua password. */
        public function edit($id) {
            $user = User::find_by_id($id);

            $this -> renderView('admin', 'edit', ['user' => $user]);
        }

        /* Método para atualizar dados do funcionário (email e password).
         *
        */
        public function update($id) {
            $info = $this -> getHTTPPost();
            $user = User::find_by_id($id);

            //Caso se tenha preenchido a password
            if($info['new_pass'] != null) {
                if($user -> verify_password(['user' => $user, 'info' => $info])) {
                    $user -> update_attributes([
                        'password' => $info['new_pass'],
                        'email' => $info['email']
                    ]);
                }
                else {
                    $this -> renderView('admin', 'edit', ['user' => $user]);
                }
            }
            else {
                $user -> update_attributes([
                    'email' => $info['email']
                ]);
            }

            $user -> save();
            $this -> renderView('auth', 'home');
        }
    }
?>