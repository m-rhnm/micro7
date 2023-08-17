<?php

namespace App\Utilities;

class Asset{
   
    public static function __callStatic($method, $args)
    {
        return $_ENV['HOST'] .'assets/'.$method.'/'.$args[0];
    }
}
