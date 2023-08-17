<?php

namespace App\Core\Routing;

use App\Core\Request;
use App\Core\Routing\Route;

class Router {
    private $request;
    private $routes;
    private $current_route;
    public function __construct()
    {
        $this->request = new Request;
        $this->routes = Route::routes();
        $this->current_route = $this->findRoute($this->request) ?? null;
        //var_dump($this->current_route);
    }
    public function findRoute($request)
    {
    //echo $request->method() . " ". $request->uri() ."<hr>" ;
            foreach ($this->routes as $route){
                if(in_array($request->method(),$route['method']) && $request->uri() == $route['uri'])
                {
                    return $route;
                }
            }
            return null;
     }

     public function dispatch404(){
        header("HTTP/1.0 404 Not Found");
        view("errors.404");
        die();
     }
     public function run()
     {
        # 405 : invalid request method
        // if($this->invalidRequest($this->request)){
        //     $this->dispatch405;
        // }


        # 404 : uri not exists

        if(is_null($this->current_route))
            $this->dispatch404();
        
        $this->dispatch($this->current_route); 
     }
     private function dispatch($route)
     {
        $action = $route['action'];
        # action : null
        if (is_null($action) || empty($action))
        {
          return;
        }
        # action : clousure
        if(is_callable($action)){
            $action();
            //call_user_func($action);
        }
        # action : Controller@method
        # action : ['Controller','method']
            
     }

}