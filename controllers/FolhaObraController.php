<?php
require_once 'models/FolhaObra.php';
require_once 'models/Auth.php';
require_once 'controllers/Controller.php';

Class FolhaObraController extends Controller
{
    public function create()
    {
        $users = User::All();
        $servicos = Servico::All();
        $clientes = [];

        foreach ($users as $user) {
            if ($user->role == "Cliente") {
                $clientes[] = $user;
            }
        }

        $this->renderView('folhaobra', 'create',['clientes'=>$clientes, 'servicos'=>$servicos]);
    }

    public function store()
    { 
        $folhaobra = new FolhaObra($this-> getHTTPPost());
        $folhaobras = FolhaObra::All();

        $folhaobra->save();
        $this->renderView('folhaobra', 'show',['folhaobras'=>$folhaobras]);

    }

   public function show()
   {
        $auth = new Auth();
        $user = $auth->getId();
        $userRole = $auth->getRole();

        if($userRole == CLIENTE){
            $folhaobras = FolhaObra::find('all', array(
                'conditions' => array(
                    'cliente_id = ?',
                    $user,
                )
            ));
        }
        else{
            $folhaobras = FolhaObra::All();
        }
        if (is_null($folhaobras)) {
            //ir para pagina de erro
            $this->renderView('auth','home');
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('folhaobra', 'show', ['folhaobras'=>$folhaobras]);
        }
   }

   public function showHistorico()
   {
    $auth = new Auth();
    $user = $auth->getId();
    $userRole = $auth->getRole();
    if($userRole == ADMINISTRADOR){
        $folhaobras = FolhaObra::find('all', array(
            'conditions' => array('estado = ?', 'emitida')));
    }
    else{
        $folhaobras = FolhaObra::find('all', array(
            'conditions' => array(
                'funcionario_id = ? AND cliente_id = ? AND estado = ?',
                $user,
                $user,
                'emitida'
            )
        ));
    }
    

       if (empty($folhaobras)) {
           //ir para pagina home
            $this->renderView('auth','home');
       } else {
           //mostrar a vista show passando os dados por parâmetro
           $this->renderView('folhaobra', 'showHistorico', ['folhaobras'=>$folhaobras]);
       }
   }

   public function edit($id)
   {
       $folhaobra = FolhaObra::find($id);
       $servicos = Servico::all();

       if (is_null($folhaobra)) {
           //ir para pagina de erro
       } else
       {
           //mostrar a vista edit passando os dados por parâmetro
           $this->renderView('folhaobra', 'edit', ['folhaobra'=>$folhaobra,'servicos'=>$servicos]);
       }
   }

   public function update($id)
   {
       $folhaobra = FolhaObra::find($id);
       $folhaobra->update_attributes($this-> getHTTPPost());
       if($folhaobra->is_valid()){
           $folhaobra->save();
           //redirecionar para o index
           $this->redirectToRoute('auth', 'home');
       } else {
           //mostrar vista edit passando o modelo como parâmetro
           $this->renderView('folhaobra', 'edit', ['folhaobra'=>$folhaobra]);
       }
   }

   public function delete($id)
   {
       $folhaobra = FolhaObra::find($id);
       $folhaobra->delete();
       //redirecionar para o index
       $this->redirectToRoute('auth', 'home');
   }
}