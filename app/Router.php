<?php

namespace App;

use \System\Init\Bootstrap;

class Router extends Bootstrap
{
    //Rotas disponivel no sistema
    protected function initRoutes()
    {
        //Nesse exemplo todas usam o mesmo controller
        $routes[] = ['route'=> '/', 'controller' => 'indexController', 'action' => 'index'];
        $routes[] = ['route'=> '/dados', 'controller' => 'indexController', 'action' => 'dados'];
        $routes[] = ['route'=> '/contato', 'controller' => 'indexController', 'action' => 'contato'];
        
        //As rotas são cadastradas
        $this->setRouter($routes);
    }
    
}
