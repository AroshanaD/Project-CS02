<?php 

    class Controllers{

        public function __construct(){
            //construct new controller object
        }

        public function load($class_dir,$class_file){
            require($class_dir.'/'.$class_file.'.php');
            if($class_dir != 'views'){
                $instance = new $class_file;
                return $instance;
            }
        }
    }