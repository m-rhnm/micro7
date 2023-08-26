<?php
function site_url($route){
    return $_ENV['HOST'] . $route;
}
function aseet_url($route) {
    return site_url("assets/".$route);
}
function view($path,$data = [])
 {
    extract($data);
    $path = str_replace('.','/',$path);
    $view_full_path = BASEPATH . "views/$path.php";
    include_once $view_full_path;
}

function strContains($str,$needle,$case_sensitive = 0 )
{
    if($case_sensitive)
        $pos = strpos($str,$needle);
    else
        $pos = stripos($str,$needle);

        return ($pos !== false) ? true : false;  
}

function nice_dump($var) 
{
   echo "<pre style ='color: #e34c1c; z-index: 999; position: relative; background: #fff; padding: 10px; margin: 10px; border-radius: 5px; border-left: 4px solid #a52222; font-weight: 600;'>";
    var_dump($var);
    echo "</pre>";
} 

function nice_dd($var) {
    nice_dump($var);
    die();
}