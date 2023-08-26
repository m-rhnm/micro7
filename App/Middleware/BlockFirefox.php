<?php

namespace App\Middleware;

//use App\Middleware\Contract\Middlewareinterface;
use hisorange\BrowserDetect\Parser as Browser;
Interface Middlewareinterface 
{
 public function handle();   

}
class BlockFirefox implements Middlewareinterface 
{
  public function handle()
  {
    global $request;
    echo "Block Firefox<hr>";
  }  
}