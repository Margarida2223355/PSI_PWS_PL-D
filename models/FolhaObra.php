<?php 
class FolhaObra extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('data','message' => 'o campo de data nao pode ser nulo!'),
        array('cliente_id','message' => 'o campo de cliente nao pode ser nulo!'),
    );
}
?>