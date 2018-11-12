<?php

namespace System\Init;

abstract class Bootstrap
{
    private $routers;

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    abstract protected function initRoutes();

    protected function setRouter($router)
    {
        $this->routers = $router;        
    }

    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    protected function run($url)
    {
        array_walk($this->routers, function($router) use ($url) {
            if($url == $router['route']){
                $class = "App\\Controllers\\" . ucfirst($router['controller']);
                $controller = new $class;
                $action = $router['action'];
                $controller->$action();
            }
        });
    }
    
}
