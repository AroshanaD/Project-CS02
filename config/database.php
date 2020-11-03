<?php
    
class Database{

	public function __construct(){
		
	}

	public function connect(){
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
			 return $pdo;
		} catch (\PDOException $e) {
			 throw new \PDOException($e->getMessage(), (int)$e->getCode());
		}
	}

}