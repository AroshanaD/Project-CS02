<?php 

    require_once('config/autoload.php');

    $url_segments = explode('/',rtrim($_SERVER['REQUEST_URI'],'/'));
    //print($url_segments);
    //print($controller);

    if(isset($url_segments[3])){
        $controller_name = ucfirst($url_segments[3]);
        //print($controller);
    }
    else{
        $controller_name = 'MainController';
        //print('main');
    }
    
    require_once('controllers/'.$controller_name.'.php');
    $controller = new $controller_name;

    /*if(isset($url_segments[4])){
        $controller_method = $url_segments[4];
    }
    else{
        $controller_method = 'index';
    }*/

    /*while(isset($url_segments[$i])){
        $method_param += $url_segments[$i];
    }*/

    $controller->$controller_method();