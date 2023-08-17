<?php

use App\Core\Routing\Route;

Route:: get('/null');

Route::add(['get', 'post'],'/a',function(){
    echo "Welcome!";
});


Route::post('/b', function(){
    echo 'save form ok'; 
});

Route::put(['/c','Controller','Method']);

Route::get('/d','Controller@Method');

