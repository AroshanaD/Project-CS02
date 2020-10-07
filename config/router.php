<?php

    class Router{

        public static $base_url = '/project-cs02';
        public static $site_url = '/project-cs02/index.php';

        public function __construct(){

        }

        public static function base_url(){
            return self::$base_url;
        }

        public static function site_url(){
            return self::$site_url;
        }
    }