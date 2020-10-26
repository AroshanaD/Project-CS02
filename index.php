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
        if(preg_match("[^a-zA-Z]",$url_segments[4][0])){
            $controller_method = 'index';
        }
        else{
            $controller_method = preg_split("[^a-zA-Z0-9]",$url_segments[4])[0];
        }
    }
    else{
        $controller_method = 'index';
    }

    if(isset($url_segments[5])){
        $parameters = explode('?',$url_segments[5]);
        $controller->$controller_method($parameters);
    }
    else{
        $controller->$controller_method();
    }
