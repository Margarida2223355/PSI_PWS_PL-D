<?php
require_once 'models/LinhaObra.php';
require_once 'controllers/Controller.php';

Class LinhaObraController extends Controller
{
    public function create($id)
    {
        $servicos = Servico::All();
        $folhaobra = FolhaObra::find($id);
        $this->renderView('linhaobra', 'create',['folhaobra'=>$folhaobra, 'servicos'=>$servicos]);
    }

    public function store()
    { 

        $linhaObra = new LinhaObra($this-> getHTTPPost());
        $servico = Servico::find($linhaObra->servico_referencia);
        $iva = Iva::find($servico->iva_id);
        $folhaobra = FolhaObra::find($linhaObra->folha_obra_id);
        // Calcular o valor * quantidade
        $linhaObra->valor_unitario = $servico->preco_hora;
        // calcular o iva
        $linhaObra->valor_iva = $servico->preco_hora * ($iva->percentagem / 100);


        $folhaobra->valor_total += (($linhaObra->valor_unitario + $linhaObra->valor_iva) * $linhaObra->quantidade);

        $folhaobra->iva_total += $linhaObra->valor_iva * $linhaObra->quantidade;

        $folhaobra->sub_total+= $linhaObra->quantidade * $linhaObra->valor_unitario;

        $folhaobra->save();
        $linhaObra->save();
        $this->renderView('auth', 'home');

    }

   public function show()
   {
       $linhaObras = LinhaObra::All();
       if (is_null($linhaObras)) {
           //ir para pagina de erro
            $this->renderView('auth','home');
       } else {
           //mostrar a vista show passando os dados por parâmetro
           $this->renderView('linhaobra', 'show', ['linhaobras'=>$linhaObras]);
       }
   }

   public function edit($id)
   {
       $linhaObra = LinhaObra::find($id);

       if (is_null($linhaObra)) {
           //ir para pagina de erro
       } else
       {
           //mostrar a vista edit passando os dados por parâmetro
           $this->renderView('linhaobra', 'edit', ['linhaobra'=>$linhaObra]);
       }
   }

   public function update($id)
   {
       $linhaObra = LinhaObra::find($id);
       $linhaObra->update_attributes($this-> getHTTPPost());
       if($linhaObra->is_valid()){
           $linhaObra->save();
           //redirecionar para o index
           $this->redirectToRoute('auth', 'home');
       } else {
           //mostrar vista edit passando o modelo como parâmetro
           $this->renderView('linhaobra', 'edit', ['linhaobra'=>$linhaObra]);
       }
   }

   public function delete($id)
   {
       $linhaObra = LinhaObra::find($id);
       $linhaObra->delete();
       //redirecionar para o index
       $this->redirectToRoute('auth', 'home');
   }
}