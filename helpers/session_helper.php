<?php
    class session_helper{

        public function start($data){
            foreach ($data as $key => $value){
                $_SESSION[$key] = $value;
            }
        }
    }
?>