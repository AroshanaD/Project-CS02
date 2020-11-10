<?php

    require_once('config/autoload.php');
    session_start();
    $controller;
    $controller_method;

    $url_segments = explode('/',rtrim($_SERVER['REQUEST_URI'],'/'));

    if(isset($url_segments[3])){
        $controller = ucfirst(explode('?',$url_segments[3])[0]);
    }
    else{
        $controller = 'Main';
    }

    if(isset($url_segments[4])){
        $controller_method = explode('?',$url_segments[4])[0];
    }
    else{
        $controller_method = 'index';
    }

    $auth = authentication::authenticate($controller);

    switch($auth){
        case 'declined':
            header('Location:/project-cs02/index.php/user/login?access denied');
        break;
        case 'access denied':
            $controller = 'user';
            $controller_method = 'dashboard';
            include_once('controllers/'.$controller.'.php');
            header('Location:/project-cs02/index.php/'.$controller.'/'.$controller_method.'?access denied');
            $controller = new $controller;
            $controller->$controller_method();
        break;
        case 'accept':
            include_once('controllers/'.$controller.'.php');
            $controller = new $controller;
            $controller->$controller_method();
        break;
    }
