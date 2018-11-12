<?php

namespace App\Controllers;

use \System\Controller\Action;
use \App\Models\Clientes;
use \App\Conn;
use \System\DI\Container;

class indexController extends Action
{
    
    public function index()
    {                
        //$data = new Clientes(Conn::getDb());
        $data = Container::getModel('clientes');
        $this->view->data = $data->all();
        $this->render('index');
    }

    public function dados()
    {                
        $id = $_GET['id'];
        $data = Container::getModel('clientes');
        $this->view->data = $data->find($id);
        $this->render('dados');
    }


    public function contato()
    {                
        $data = Container::getModel('clientes');
        $this->view->data = $data->find(40);
        $this->render('contato');
    }

}

