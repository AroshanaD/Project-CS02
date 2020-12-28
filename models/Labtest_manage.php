<?php
    class Labtest_manage extends Models{
        public function __construct(){

        }

        public function add($name,$cost,$description){
            $connect = new Database();
            $pdo = $connect->connect();
            $query="INSERT INTO `test`(`name`,`unit_cost`,`description`) VALUES(?,?,?)";
            $stmt = $pdo->prepare($query);
            $status=$stmt->execute([$name,$cost,$description]);
            return $status;
        }

        public function view(){
            $connect = new Database();
            $pdo = $connect->connect();

            $query = "SELECT * FROM test WHERE deleted=0";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function search($name){
            $connect = new Database;
            $pdo = $connect->connect();
    
            if($name != null){
                $name = $name.'%';
            }
            else{
                $name = '';
            }
    
            $query = "SELECT * FROM test WHERE name LIKE ? AND deleted =0";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$name]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function displayById($id){
            $connect = new Database();
            $pdo = $connect->connect();
            $query = "SELECT * FROM test WHERE id=?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        public function update($id,$price,$description){
            $connect = new Database();
            $pdo = $connect->connect();
            $deleted = 0;
            $query= "UPDATE test SET unit_cost=?, description=? WHERE id=?";
            $stmt = $pdo->prepare($query);
            $status= $stmt->execute([$price, $description,$id]);

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

            $query = "UPDATE test SET deleted=1 WHERE id=?";
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