<?php
    require_once './controllers/Controller.php';

    class WorkerController extends Controller {
        public function index() {
            $this -> renderView('worker', 'index');
        }
    }
?>