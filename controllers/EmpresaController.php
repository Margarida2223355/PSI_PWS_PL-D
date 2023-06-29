<?php
require_once 'models/Empresa.php';
require_once 'controllers/Controller.php';

Class EmpresaController extends Controller
{

//    public function index()
//    {
//        $auth = new Auth();
//        if($auth->getRole() == 'administrador') {
//            $empresas = Empresa::all();
//            //mostrar a vista index passando os dados por parâmetro
//            $this->renderView('empresa', 'index', ['empresas' => $empresas]);
//        }
//        else if($auth->getRole() == 'funcionário')
//        {
//            $this->redirectToRoute('bo', 'index');
//        }
//    }

    public function __construct() {
        $this -> authenticationFilter();
    }

    public function create()
    {
        //mostrar a vista create
        $empresas = Empresa::all();
        $this->renderView('empresa', 'create', ['empresas'=>$empresas]);
    }

    public function store()
    {
        $empresas = Empresa::exists();

    if ($empresas == null) {
        $empresa = new Empresa($this->getHTTPPost());

        if ($empresa->is_valid()) {
            $empresa->save();
            // Redirecionar para a home
            $this->redirectToRoute('auth', 'home');
        } else {
            // Mostrar vista create passando o modelo como parâmetro
            $this->renderView('empresa', 'create', ['empresa' => $empresa]);
        }
    } else {
        $this->redirectToRoute('auth', 'home');
    }
    }

   public function show($id)
   {
       $empresa = Empresa::find($id);
       if (is_null($empresa)) {
           //ir para pagina de erro

       } else {
           //mostrar a vista show passando os dados por parâmetro
           $this->renderView('empresa', 'show', ['empresa'=>$empresa]);
       }
   }

   public function edit($id)
   {
       $empresa = Empresa::find($id);

       if (is_null($empresa)) {
           //ir para pagina de erro
       } else
       {
           //mostrar a vista edit passando os dados por parâmetro
           $this->renderView('empresa', 'edit', ['empresa'=>$empresa]);
       }
   }

   public function update($id)
   {
       $empresa = Empresa::find($id);
       $empresa->update_attributes($this-> getHTTPPost());
       if($empresa->is_valid()){
           $empresa->save();
           //redirecionar para o index
           $this->redirectToRoute('empresa', 'index');
       } else {
           //mostrar vista edit passando o modelo como parâmetro
           $this->renderView('empresa', 'edit', ['empresa'=>$empresa]);
       }
   }

   public function delete($id)
   {
       $empresa = Empresa::find($id);
       $empresa->delete();
       //redirecionar para o index
       $this->redirectToRoute('empresa', 'index');
   }
}