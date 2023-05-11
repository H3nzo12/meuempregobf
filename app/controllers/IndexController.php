<?php

namespace App\controllers;

use Core\controller\Action;

class IndexController extends Action{

    

    public function index(){
        $this->view->dados = array('nome' =>'Paulo','Ana','Felipe','Maria');
        $this->render('index');
    }
    
    public function contato(){
        $this->view->dados = array('Gabriel','Laura','Gustavo','Luiza');
        $this->render('contato',);
    }

    
}


?>