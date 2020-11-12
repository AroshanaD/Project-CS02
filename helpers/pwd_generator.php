<?php

    class pwd_generator{

        public static function pwd_gen(){

            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@£$%&#?*&^';
            $randomString = '';
  
            for ($i = 0; $i < 12; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }
  
            return hash('SHA256',$randomString);

        }

    }

?>