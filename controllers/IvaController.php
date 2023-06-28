<?php
require_once 'models/Iva.php';
require_once 'controllers/Controller.php';

Class IvaController extends Controller
{
    public function create()
    {
        $this->renderView('iva', 'create');
    }

    public function store()
    { 
        $iva = new Iva($this-> getHTTPPost());

        $iva->save();
        $this->renderView('auth', 'home');

    }

   public function show()
   {
       $ivas = Iva::All();
       if (is_null($ivas)) {
           //ir para pagina de erro
            $this->renderView('auth','home');
       } else {
           //mostrar a vista show passando os dados por parâmetro
           $this->renderView('iva', 'show', ['ivas'=>$ivas]);
       }
   }

   public function edit($id)
   {
       $iva = Iva::find($id);

       if (is_null($iva)) {
           //ir para pagina de erro
       } else
       {
           //mostrar a vista edit passando os dados por parâmetro
           $this->renderView('iva', 'edit', ['iva'=>$iva]);
       }
   }

   public function update($id)
   {
       $iva = Iva::find($id);
       $iva->update_attributes($this-> getHTTPPost());
       if($iva->is_valid()){
           $iva->save();
           //redirecionar para o index
           $this->redirectToRoute('auth', 'home');
       } else {
           //mostrar vista edit passando o modelo como parâmetro
           $this->renderView('iva', 'edit', ['iva'=>$iva]);
       }
   }

   public function delete($id)
   {
       $iva = iva::find($id);
       $iva->delete();
       //redirecionar para o index
       $this->redirectToRoute('auth', 'home');
   }
}