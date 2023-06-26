<?php

class Empresa extends \ActiveRecord\Model
{

    static $validates_presence_of = array(
        array('designacaosocial', 'message' => 'O campo de designação social está vazio!'),
        array('email', 'message' => 'O campo de email está vazio!'),
        array('telefone', 'message' => 'O campo de telefone está vazio!'),
        array('nif', 'message' => 'O campo de nif está vazio!'),
        array('morada', 'message' => 'O campo de morada está vazio!'),
        array('codigopostal', 'message' => 'O campo de código postal está vazio!'),
        array('localidade', 'message' => 'O campo de localidade está vazio!'),
        array('capitalsocial', 'message' => 'O campo de capital social está vazio!'),
    );

    static $validates_size_of = array(
        array('designacaosocial', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('email', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('telefone', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('nif', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('morada', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('codigopostal', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('localidade', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('capitalsocial', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho válido'),
    );

}