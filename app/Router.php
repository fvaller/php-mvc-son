<?php

namespace App;

use \System\Init\Bootstrap;

class Router extends Bootstrap
{
    protected function initRoutes()
    {
        $routes[] = ['route'=> '/', 'controller' => 'indexController', 'action' => 'index'];
        $routes[] = ['route'=> '/dados', 'controller' => 'indexController', 'action' => 'dados'];
        $routes[] = ['route'=> '/contato', 'controller' => 'indexController', 'action' => 'contato'];
        $this->setRouter($routes);
    }
    
}
