<?php
    class PatientTest_Manage extends Models{
        public function __construct(){

        }

        public function add($tid,$mid,$pid,$name,$date,$time){
            $connect = new Database();
            $pdo = $connect->connect();
            $query="insert into test values('$id','$name','$price','$description',0)";
            $stmt = $pdo->prepare($query);
            $status=$stmt->execute();
                
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

        public function get_lastid(){
            $connect = new Database();
            $pdo = $connect->connect();

            $query = "SELECT id FROM lab_test ORDER BY id DESC LIMIT 1";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        public function add_labtest($name,$gender,$age,$contact,$cost,$id,$lab_id){
            $connect = new Database();
            $pdo = $connect->connect();

            $query="INSERT INTO `lab_test`(patient_name,patient_gender,patient_age,patient_contact,cost,patient_id,lab_id) VALUES(?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($query);
            $result = $stmt->execute([$name,$gender,$age,$contact,$cost,$id,$lab_id]);
            return $result;
        }

        public function add_testis($lab_test,$test){
            $connect = new Database();
            $pdo = $connect->connect();

            $query="INSERT INTO `test_is`(labtest_id,test_id) VALUES(?,?)";
            $stmt = $pdo->prepare($query);
            $result = $stmt->execute([$lab_test,$test]);
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
    
            $query = "SELECT * FROM test WHERE id = ? AND deleted =0 OR name LIKE ?  ";
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
            $status = $stmt->execute([$testName,$price, $description,$id]);
        }

        public function delete($testId){
            $connect = new Database();
            $pdo = $connect->connect();

            $query = "UPDATE test SET deleted='1' WHERE id=?";
            $stmt = $pdo->prepare($query);
            $status = $stmt->execute([$testId]);
        }
    }
?>