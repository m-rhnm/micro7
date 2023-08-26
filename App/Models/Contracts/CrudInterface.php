<?php


namespace App\Models\Contracts;


interface CrudInterface
{
    # Creat (insert)
    public function create(array $data) : int;
    #output ---> id


    # Read (select)
    public function find( $id) : object;
     #output ---> object
    public function get(array $columns, array $where) : array;
     #output ---> multiple data

    # Update
    public function update(array $data,array $where) : int;
     #output ---> number of updates

    # Delete      
    public function delete(array $where) : int;
     #output ---> id

}