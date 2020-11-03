<?php 

    require_once('config/autoload.php');
    $controller;
    $controller_method;

    $url_segments = explode('/',rtrim($_SERVER['REQUEST_URI'],'/'));

    if(isset($url_segments[3])){
        $controller_name = ucfirst(explode('?',$url_segments[3])[0]);
    }
    else{
        $controller_name = 'Main';
    }
    
    include_once('controllers/'.$controller_name.'.php');
    $controller = new $controller_name;

    if(isset($url_segments[4])){
        $controller_method = explode('?',$url_segments[4])[0];
    }
    else{
        $controller_method = 'index';
    }

    $controller->$controller_method();
