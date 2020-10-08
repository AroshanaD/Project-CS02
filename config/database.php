<?php
    
class Db{

	public static $db = array(
		'dsn'	=> '',
		'hostname' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'hospital',
		'dbdriver' => 'mysqli',
		'dbprefix' => '');

	public static function connect(){
		$connection = new mysqli(self::$db['hostname'],self::$db['username'],self::$db['password'],self::$db['database']);
		return $connection;
	}

}