<?php

class db_helper{
    
    public function __construct(){
        
    }

    public function run_query($connection,$query){
        $statement = $connection->stmt_init();
        if($statement->prepare($query)){
            $statement->execute();
            $result = $statement->get_result();
            $statement->close();
            return $result;
        }
        else{
            return "error";
        }
    }

}