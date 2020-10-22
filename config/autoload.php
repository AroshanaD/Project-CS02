<?php

    class Autoload{

        static $autoload_array = array('core/Controllers','core/Models','config/database','config/router',
                                        'helpers/db_helper','helpers/validation_helper');

        public function __construct(){

        }

        public static function autoloader(){
            foreach (self::$autoload_array as $file_path){
                require_once($file_path.'.php');
            }
        }
    }

    Autoload::autoloader();