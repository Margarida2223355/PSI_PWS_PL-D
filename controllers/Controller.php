<?php
    //Criar a classe Controller
    class Controller {
        /* Definir método de redirecionar para rota.
         * Este método recebe o prefixo do controlador, a ação e os parâmetros.
        */
        protected function redirectToRoute($controllerPrefix, $action, $params = []) {

            //URL através do prefixo e da ação
            $url = 'index.php?c='
                . urldecode($controllerPrefix)
                . "&a="
                . urldecode($action);

            //Caso existam parâmetros e enviar, enviar através do URL
            foreach($params as $key => $value) {
                $url .= '&'
                    . urldecode($key)
                    . '='
                    . urldecode($value);
            }

            //Redirecionar utilizando o URL final
            header('Location: ' . $url);
        }

        /* Definir método para mostrar a view pretendida.
         * Este método recebe o prefiro do controlador, o nome da view, dados (podem não ser enviados)
         * e por último o layout da página (default).
        */
        protected function renderView($controllerPrefix, $viewName, $data = [], $layout = 'default') {
            //Converter o array associativo num conjunto de variáveis visíveis
            extract($data);

            //Definir variável ViewPath que mostrará a vista pretendida
            $viewPath = 'views/'
                . $controllerPrefix
                . '/'
                . $viewName
                . '.php';

            //Definir variável layoutPath para mostrar a vista layout
            $layoutPath = 'views/layout/'
                . $layout
                . '.php';

            //Incluir ficheiro do layout
            require_once ($layoutPath);
        }
    }
?>