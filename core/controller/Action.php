<?php

namespace Core\controller;

use stdClass;


abstract class Action{

    protected $view;

    public function __construct()
    {
        $this->view = new stdClass;
    }

    protected function render ($view){

       $this->view->page = $view;
       require_once('../app/views/layout/layout.phtml');

    }

    public function content(){

        $classeAtual =  get_class($this); // pega nome e caminho da classe em uso
        $classeAtual =  str_replace('App\\controllers\\','',$classeAtual); //formatamos retirando parte do endereço
        $classeAtual =  str_replace('Controller','',$classeAtual); // deixamos apenas a palavra index de indexcontroller
        $classeAtual = strtolower($classeAtual); // formatando para totalmente minusculo


        require_once('../app/views/'.$classeAtual.'/'.$this->view->page.'.phtml');
    }
}

?>