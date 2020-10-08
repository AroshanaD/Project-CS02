<?php

class DB_Helper{
    
    public function __construct(){
        
    }

    public static function run_query($query,$param){
        $connection = Db::connect();
        $statement = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($statement,$query)){
            return "error";
        }
        else{
            foreach ($param as $binds){
                $statement->bind_param($binds[0],$binds[1]);
            }
            $statement->execute();
            $result = $statement->get_result();
            return $result;
        }
    }

}