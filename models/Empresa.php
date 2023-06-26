<?php

class Empresa extends \ActiveRecord\Model
{

    static $validates_presence_of = array(
        array('designacaosocial', 'message' => 'O campo de designação social não pode ser nulo!'),
        array('email', 'message' => 'O campo de email não pode ser nulo'),
        array('telefone', 'message' => 'O campo de telefone não pode ser nulo'),
        array('nif', 'message' => 'O campo de nif não pode ser nulo'),
        array('morada', 'message' => 'O campo de morada não pode ser nulo'),
        array('codigopostal', 'message' => 'O campo de código postal não pode ser nulo'),
        array('localidade', 'message' => 'O campo de localidade não pode ser nulo'),
        array('capitalsocial', 'message' => 'O campo de capital social não pode ser nulo'),
    );

    static $validates_size_of = array(
        array('designacaosocial', 'maximum' => 30, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('email', 'maximum' => 30, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('telefone', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('nif', 'maximum' => 10, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('morada', 'maximum' => 30, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('codigopostal', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('localidade', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho válido'),
        array('capitalsocial', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho válido'),
    );

}