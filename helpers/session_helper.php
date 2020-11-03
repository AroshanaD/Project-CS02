<?php
    class session_helper{

        public function start($data){
            session_start();

            foreach ($data as $key => $value){
                $_SESSION[$key] = $value;
            }
        }
    }
?>