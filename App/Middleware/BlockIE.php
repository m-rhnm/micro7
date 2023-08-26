<?php


namespace App\Middleware;

//use App\Middleware\Contract\Middlewareinterface;
// Interface Middlewareinterface 
// {
//  public function handle();   
// }

class BlockIE implements Middlewareinterface 
{
    public function handle()
  {
    global $request;
    die("BlockIE");
  }  
}