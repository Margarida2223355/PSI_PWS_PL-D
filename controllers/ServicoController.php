<?php
require_once 'models/Servico.php';
require_once 'controllers/Controller.php';

Class ServicoController extends Controller
{
    public function create()
    {
        $ivas = Iva::find_all_by_em_vigor([1]);
        $this->renderView('servico', 'create', ['ivas'=>$ivas]);
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
        //mostrar a vista show passando os dados de serviço por parâmetro
        $this->renderView('servico', 'show', ['servicos'=>$servicos]);
   }

   public function edit($id)
   {
       $servico = Servico::find($id);
       $ivas = Iva::find_all_by_em_vigor([1]);

       if (is_null($servico)) {
           //ir para pagina de erro
       } else
       {
           //mostrar a vista edit passando os dados de serviço por parâmetro
           $this->renderView('servico', 'edit', ['servico'=>$servico, 'ivas'=>$ivas]);
       }
   }

   public function update($id)
   {
       $servico = Servico::find($id);
       $servico->update_attributes($this-> getHTTPPost());
       if($servico->is_valid()){
           $servico->save();
           //redirecionar para a home
           $this->redirectToRoute('auth', 'home');
       } else {
           //mostrar vista edit
           $this->renderView('servico', 'edit', ['servico'=>$servico]);
       }
   }

   public function delete($id)
   {
       $servico = Servico::find($id);
       $servico->delete();
       $this->redirectToRoute('auth', 'home');
   }
}