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
                
        }

        public function view(){
            $connect = new Database();
            $pdo = $connect->connect();

            $query = "SELECT * FROM test WHERE deleted='0'";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function search($id,$name){
            $connect = new Database;
            $pdo = $connect->connect();
    
            if($name != null){
                $name = $name.'%';
            }
            else{
                $name = '';
            }
    
            $query = "SELECT * FROM test WHERE id = ? AND deleted ='0' OR name LIKE ?  ";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id,$name]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function displayById($id){
            $connect = new Database();
            $pdo = $connect->connect();
            $query = "SELECT * FROM test WHERE id=?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function update($id,$testName,$price,$description){
            $connect = new Database();
            $pdo = $connect->connect();
            $deleted = 0;
            $query= "UPDATE test SET name=?, unit_cost=?, description=?, deleted='$deleted' WHERE id=?";
            $stmt = $pdo->prepare($query);
            $status= $stmt->execute([$testName,$price, $description,$id]);

            if($status==TRUE){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

        public function delete($testId){
            $connect = new Database();
            $pdo = $connect->connect();

            $query = "UPDATE test SET deleted='1' WHERE id=?";
            $stmt = $pdo->prepare($query);
            $status= $stmt->execute([$testId]);

            if($status==TRUE){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
    }
?>