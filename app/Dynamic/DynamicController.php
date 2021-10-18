<?php

namespace App\Dynamic; 

use App\Http\Controllers\ShopController;

class DynamicController
{
    private $args;
    private $controller;
    private $method;

    public function DController($controller)
    {
        $this->controller = new $controller[0]();
        $this->method = $controller[1];
        $this->args = $controller[2] ?? '';

        return $this;
        // return (new ShopController())->index();
    }

    public function index($index){
        $this->index = $index;
        return $this;
    }

    public function getResult()
    {
        $method = $this->method;
        $params = $this->args;

        return $this->controller->$method($params);
    }
}
