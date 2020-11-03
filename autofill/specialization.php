<?php

    class Autofill_Data{
        public function __construct(){

        }

        public function get_spec(){
            $dsn = "mysql:host=localhost;dbname=hospital;charset=utf8mb4";
		    $user = 'root';
		    $pass = '';
		    $options = [
			    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			    PDO::ATTR_EMULATE_PREPARES   => false,
			];
		    try {
			    $pdo = new PDO($dsn, $user, $pass, $options);
		    } catch (\PDOException $e) {
			    throw new \PDOException($e->getMessage(), (int)$e->getCode());
		    }

            $query = "SELECT name FROM specialization ORDER BY name ASC";
            $stmt = $pdo->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll();
            header('Content-Type: application/json');
            echo json_encode($result);
        }
        
    }

$instance = new Autofill_Data;
$instance->get_spec();

?>