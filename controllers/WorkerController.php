<?php
    require_once './controllers/Controller.php';

    class WorkerController extends Controller {

        /* Método para editar funcionário.
         *
         * Recebe o id do funcionário e mostra formulário
         * para editar as informações do funcionário.
        */
        public function edit($id) {
            //Encontra funcionário pelo id
            $worker = User::find($id);

            //Se for nulo, apresenta erro
            if(is_null($worker)) {
                echo("Não existe funcionário!");
            }
            //Caso contrário, abre formulário para editar informações
            else {
                $this -> renderView('worker', 'edit', ['worker' => $worker]);
            }
            
        }

        /* Método para mostrar formulário de criação de funcionário. */
        public function create(){
            $this->renderView('worker','create');
        }

        /* Método para guardar funcionário que foi criado.
         *
         * Inserir novo user onde o role tem de ser "Funcionario".
        */
        public function store(){
            $worker = $this -> getHTTPPost();
            $worker['role'] = 'Funcionario';

            $user = new User($worker);

            //Verifica se o funcionário é válido
            if($user -> is_valid()) {
                $user -> save();

                //Volta para a página home
                $this -> redirectToRoute('auth', 'home');
            }
            //Caso não seja válido, volta a mostrar o formulário de criação do funcionário
            else {
                $this->renderView('worker','create');
            }

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
                $this -> renderView('worker', 'edit',['user' => $user]);
            }
        }

        /* Método para ver todos os funcionários da base de dados.
         * 
         * Encontra todos os users que são funcionários na base de dados
         * e envia a lista dos mesmos ($workers) para a vista.
        */
        public function index() {
            //Ir buscar todos os users que são funcionários
            $workers = User::find('all', array('conditions' => "role LIKE 'Funcionario'"));

            //Enviar lista de funcionários na vista
            $this -> renderView('worker', 'index', ['workers' => $workers]);
        }

        /* Método para mostrar mais informações sobre um funcionário. */
        public function show($id) {
            //Encontrar funcionário pelo if
            $worker = User::find($id);

            //Se for nulo, apresenta erro
            if(is_null($worker)) {
                echo("Não existe funcionário!");
            }
            //Caso contrário, abre formulário para editar informações
            else {
                $this -> renderView('worker', 'show', ['worker' => $worker]);
            }
        }
    }
?>