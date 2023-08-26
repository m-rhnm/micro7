<?php
namespace App\Controllers;

class TaskController {
    public function list()
    {
        #db
      

        $data = [
           'tasks'=> ['First task', 'Second task', '7th task', 'Test task', 'another task']
        ];
        view('todo.list',$data);
    }
    
}