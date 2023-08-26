<?php

use App\Core\Routing\Route;
use App\Middleware\BlockIE;
use App\Middleware\BlockFirefox;

Route::get('/',"HomeController@index");


Route::get('/post/{slug}',"PostController@single");
Route::get('/post/{slug}/comment/{comment_id}',"PostController@single");
Route::get('/post/{slug}/comment/{comment_id}',"PostController@comment ");









Route::get('/todo/list',"TaskController@list",[BlockFirefox::class,BlockIE::class]);

Route::get('/archive',"ArchiveController@index");
Route::get('/archive/articles',"ArchiveController@articles");
Route::get('/archive/products',"ArchiveController@products");

Route::add(['get', 'post'],'/a',function(){
    echo "Welcome!";
});


Route::post('/b', function(){
    echo 'save form ok'; 
});

Route::put(['/c','Controller','Method']);

Route::get('/d','Controller@Method');



