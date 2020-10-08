<?php 

    require_once('config/autoload.php');
    $controller;
    $controller_method;
    $parameters = NULL;

    $url_segments = explode('/',rtrim($_SERVER['REQUEST_URI'],'/'));
    //print($url_segments);
    //print($controller);

    if(isset($url_segments[3])){
        $controller_name = ucfirst($url_segments[3]);
        //print($controller);
    }
    else{
        $controller_name = 'Login';
        //print('main');
    }
    
    require_once('controllers/'.$controller_name.'.php');
    $controller = new $controller_name;

    if(isset($url_segments[4])){
        $controller_method = $url_segments[4];
        if(array_slice($url_segments,5) != NULL){
            $parameters = array_slice($url_segments,5);
        }
        else{
            $parameters = NULL;
        }
    }
    else{
        $controller_method = 'index';
    }

    $controller->$controller_method($parameters);
