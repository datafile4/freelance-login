<?php

	class Register{
		private $servername = NULL;
		private $dbname = NULL;
		private $username = NULL;
		private $password = NULL;
		private $dbconnection = NULL;
	}

	function connectToDB(){
		try{
			 $this->dbconnection = new PDO("mysql:host=$this->servername;
			 dbname = $this->dbname");
		 }
		 catch (PDOException $e){
		 	echo $e -> getMessage();
		 }
	}

	function __construct($username, $password){
		$this ->username = $username;
		$this ->password = $password;		 
	}

?>
