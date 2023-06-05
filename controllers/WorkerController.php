<?php
    require_once './controllers/Controller.php';

    class WorkerController extends Controller {
        public function index() {
            $this -> renderView('worker', 'index');
        }

        /* Método para atualizar informações na base de dados.
         * Este método recebe o id do utilizador.
        */
        public function update($id) {
            //Procurar utilizador na base de dados pelo id
            $user = User::find($id);

            /* Atualizar dados do utilizador.
             * Os dados são recebidos através do método definido no Controller
             * para receber dados através do método POST.
            */
            $user -> update_attributes($this -> getHTTPPost());

            /* Caso as informações sejam válidas, guardar o utilizador
             * e voltar para a vista Home.
             * 
             * Caso contrário, mostra novamente a vista de atualizar
             * e envia o $user para a vista. Isto para que apresente o erro
             * caso o utilizador não seja válido (falta password e/ou email).
            */
            if($user -> is_valid()) {
                $user -> save();
                $this -> renderView('auth', 'home');
            }

            else {
                $this -> renderView('worker', 'index',['user' => $user]);
            }
        }
    }
?>