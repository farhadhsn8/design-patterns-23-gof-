<?php

class DBConnection {
	private $connection;
	private static $instance; //The static variable for store Singleton's instance
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "laravel_blog";
	


    
	public static function getInstance():DBConnection {
		if(self::$instance==null) { // If no instance then make one
			$instance=self::$instance = new DBConnection ();
		}
		return $instance;
	}
	// Constructor
	private function __construct() {
		$this->connection = new mysqli($this->host, $this->username, 
			$this->password, $this->database);
            var_dump($this->connection);
	}
}


DBConnection::getInstance();


?>