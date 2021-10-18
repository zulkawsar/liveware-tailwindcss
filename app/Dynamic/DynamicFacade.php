<?php

namespace App\Dynamic; 

class DynamicFacade
{
    public static function __callStatic($method, $args)
    {
        return app()->make('Dynamic')->$method($args);
    }
}
