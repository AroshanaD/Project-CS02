<?php

    class validation_helper{
        public function __construct(){

        }

        public function validate($table,$col,$value){
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
            
            $query = "SELECT count(1) FROM $table where $col = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$value]);
            $result = $stmt->fetch();
            return $result['count(1)'];
        }
    }