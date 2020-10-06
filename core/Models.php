<?php

    class Models{
        public function __construct(){
            // create new model object
        }

        public function load($class_dir,$class_file){
            require($class_dir.'/'.$class_file.'.php');
            $instance = new $class_file;
            return $instance;
        }
    }