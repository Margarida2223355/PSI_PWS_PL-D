<?php
    require_once 'Controller.php';

    class AuthController extends Controller {
        public function index() {
            $this -> renderView('auth', 'index');
        }
    }
?>