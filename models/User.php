<?php
    class User extends \ActiveRecord\Model {
        /* Validações para o User */
        //Email e password não podem ser nulos
        static $validates_presence_of = array(
            array('email', 'message' => 'Email não pode ser nulo!'),
            array('password', 'message' => 'Password não pode ser nula!')
        );
        
        //Telefone e NIF apenas podem ter 9 caracteres
        static $validates_size_of = array(
            array('telefone', 'maximum' => 9, 'message' => 'Telefone apenas pode ter 9 dígitos!'),
            array('nif', 'maximum' => 9, 'message' => 'NIF apenas pode ter 9 dígitos!'),
        );

        //Password não pode ser igual à da lista
        static $validates_exclusion_of = array(
            array('password', 'in' => array('123', '0000', '123456789'), 'message' => 'Password necessita ser mais complexa')
        );
        //Email com caracteres especiais necessários (@)
        static $validates_format_of = array(
            array('email', 'with' => '/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/'),
        );

        /* Método para verificar password inserida
         *
         * Este método irá verificar se as informações inseridas
         * pelo utilizador estão corretas.
         * Nomeadamente:
         *  - password antiga correta
         *  - password e confirmação iguais
         *  - se password nova for igual à antiga cancela
         * 
        */
        public function verify_password($dados = []) {
            extract($dados);

            if($user -> is_valid()) {
                if($info['new_pass'] != $user -> password) {
                    if(($info['old_pass'] == $user -> password) && ($info['new_pass'] == $info['new_pass2'])) {
                        return true;
                    }
                    else {
                        return false;
                    }
                }
            }
        }

        /* Método idêntico ao anterior mas para o email */
        public function verify_email($dados = []) {
            extract($dados);

            if($user -> is_valid()) {
                if($info['email'] != $user -> email) {
                    return true;
                }
                else {
                    return false;
                }
            }
        }
    }
?>