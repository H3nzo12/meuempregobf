<?php

namespace App;

use Core\init\Bootstrap;

class Route extends Bootstrap{

    public function initRoutes(){
        
        $routes['home'] = array(
            "route"        =>  "/", 
            "controller"   =>  "indexController",
            'action'       =>  'index'
        );


        $routes['contato'] = array(
            "route"        =>  "/contato", 
            "controller"   =>  "indexController",
            'action'       =>  'contato'
        );

        $this->setRoutes($routes);

    }
}

?>