<?php

    class validation_helper{

        public $pdo;

        public function __construct(){
            $dsn = "mysql:host=localhost;dbname=hospital;charset=utf8mb4";
		    $user = 'root';
		    $pass = '';
		    $options = [
			    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			    PDO::ATTR_EMULATE_PREPARES   => false,
			];
		    try {
			    $this->pdo = new PDO($dsn, $user, $pass, $options);
		    } catch (\PDOException $e) {
			    throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
        }

        public function validate($table,$col,$value){
            $query = "SELECT count(1) FROM $table where $col = ?";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([$value]);
            $result = $stmt->fetch();
            return $result['count(1)'];
        }

        public function validate_plus($table,$col,$value,$id){
            $query = "SELECT count(1) FROM $table WHERE $col = ? AND id != ?";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([$value,$id]);
            $result = $stmt->fetch();
            return $result['count(1)'];
        }
    }