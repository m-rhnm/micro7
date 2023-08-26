<?php 
namespace App\Controllers;


class PostController {
    public function single(){
        global $request;
        $slug =  $request->get_route_param('slug');
        echo "slug: $slug";
    }
    public function comment(){
        global $request;
        $slug =  $request->get_route_param('slug');
        $c_id =  $request->get_route_param('comment_id');
        echo "slug:$slug </br> comment_id:  $c_id";
     }
}