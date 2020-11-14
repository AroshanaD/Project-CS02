<?php
    class Labtest_manage extends Models{
        public function __construct(){

        }

        public function add($id,$name,$price,$description){
            $connect = new Database();
            $pdo = $connect->connect();
            $query="insert into test values('$id','$name','$price','$description',0)";
            $stmt = $pdo->prepare($query);
            $status=$stmt->execute();

            if($status == TRUE){
                return TRUE;
            }
            else{
                return FALSE;
            }
                
        }
    }
?>