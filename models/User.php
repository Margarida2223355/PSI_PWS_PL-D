<?php
    class User extends \ActiveRecord\Model {
        static $validates_presence_of = array(
            array('email', 'message' => 'Email não pode ser nulo!'),
            array('password', 'message' => 'Password não pode ser nula!')
        );
    }
?>