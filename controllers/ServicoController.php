<?php
require_once 'models/Servico.php';
require_once 'controllers/Controller.php';

Class ServicoController extends Controller
{
    public function create()
    {
        $this->renderView('servico', 'create');
    }

    public function store()
    {
        $servico = new Servico($this-> getHTTPPost());
        $servico->save();
        $this->renderView('auth', 'home');

    }

   public function show()
   {
       $servicos = Servico::All();
       if (is_null($servicos)) {
           //ir para pagina de erro
            $this->renderView('auth','home');
       } else {
           //mostrar a vista show passando os dados por parâmetro
           $this->renderView('empresa', 'show', ['servicos'=>$servicos]);
       }
   }

   public function edit($id)
   {
       $servico = Servico::find($id);

       if (is_null($servico)) {
           //ir para pagina de erro
       } else
       {
           //mostrar a vista edit passando os dados por parâmetro
           $this->renderView('servico', 'edit', ['servico'=>$servico]);
       }
   }

   public function update($id)
   {
       $servico = Servico::find($id);
       $servico->update_attributes($this-> getHTTPPost());
       if($servico->is_valid()){
           $servico->save();
           //redirecionar para o index
           $this->redirectToRoute('auth', 'home');
       } else {
           //mostrar vista edit passando o modelo como parâmetro
           $this->renderView('servico', 'edit', ['servico'=>$servico]);
       }
   }

   public function delete($id)
   {
       $servico = Servico::find($id);
       $servico->delete();
       //redirecionar para o index
       $this->redirectToRoute('auth', 'home');
   }
}