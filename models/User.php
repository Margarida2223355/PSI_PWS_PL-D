<?php
    class User extends \ActiveRecord\Model {
        static $validates_presence_of = array(
            array('email', 'message' => 'Email não pode ser nulo!'),
            array('password', 'message' => 'Password não pode ser nula!')
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