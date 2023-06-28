<?php
    require_once './controllers/Controller.php';
    require_once './models/User.php';

    class ClienteController extends Controller {

        public function __construct() {
            $this -> authenticationFilter();
        }
        
        public function home() {
            $this -> renderView('cliente', 'home');
        }
        
        public function show() {
            $users = User::All();
            $clientes = [];

            foreach ($users as $user) {
                if ($user->role == "Cliente") {
                    $clientes[] = $user;
                }
            }
            if (!empty($clientes)) {
                $this->renderView('cliente','show',['clientes'=> $clientes]);
            }
        }

        public function edit($id) {
            $cliente = User::find_by_id($id);
            $this -> renderView('cliente', 'edit',['cliente'=>$cliente]);
        }

        public function create(){
            $this->renderView('cliente','create');
        }

        public function store(){
            $user = new User($this->getHTTPPost());
            $user -> role ='Cliente';

            if($user -> is_valid()) {
                $user->save();
                $this->renderView('auth', 'home');
            }
            else {
                $this->renderView('cliente','create');
            }
        }
        /* Método para atualizar informações na base de dados.
         * Este método recebe o id do utilizador.
        */
        public function update($id) {
            $info = $this -> getHTTPPost();
            //Procurar utilizador na base de dados pelo id
            $cliente = User::find_by_id($id);

            //Se password vier vazia, cliente não pretende alterar
            if($info['password'] != null) {
                /* Atualizar dados do utilizador.
                 * Os dados são recebidos através do método definido no Controller
                 * para receber dados através do método POST.
                */
                $cliente -> update_attributes($info);
            }
            //Se estiver vazia, atualiza tudo menos a password
            else {
                $cliente -> update_attributes([
                    'username' => $info['username'],
                    'email' => $info['email'],
                    'telefone' => $info['telefone'],
                    'nif' => $info['nif'],
                    'morada' => $info['morada'],
                    'codpostal' => $info['codpostal'],
                    'localidade' => $info['localidade'],
                ]);
            }

            /* Caso as informações sejam válidas, guardar o utilizador
             * e voltar para a vista Home.
             * 
             * Caso contrário, mostra novamente a vista de atualizar
             * e envia o $user para a vista. Isto para que apresente o erro
             * caso o utilizador não seja válido (falta password e/ou email).
            */
            if($cliente -> is_valid()) {
                $cliente -> save();
                $this -> renderView('auth', 'home');
            }

            else {
                $this -> renderView('cliente', 'edit',['user' => $cliente]);
            }
        }
        public function delete($id)
    {
        $cliente = User::find_by_id($id);
        $cliente->delete();
        //redirecionar para a home
        $this->redirectToRoute('auth','home');
    }
    }
?>