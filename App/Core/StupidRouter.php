<?php

namespace App\Core;

use App\Utilities\Url;

class StupidRouter{
    private $route;
    public function __construct()
    {
        $this->route = [
            '/' => 'home/index.php',
            '/colors/blue' => 'colors/blue.php',
            '/colors/green' => 'colors/green.php',
            '/colors/red' => 'colors/red.php',

        ];
    }

    public  function run()
    {
        $current_route = Url::current_route();
        foreach($this->route as $route => $view){
            if ($current_route == $route) {
                $this->includeAndDie(BASEPATH . "views/$view");
            }
        }
        
        header("HTTP/1.0 404 Not Found");
        $this->includeAndDie(BASEPATH . "views/errors/404.php");
    }

    private function includeAndDie($viewPath){
        include $viewPath;
        die();
    }
}