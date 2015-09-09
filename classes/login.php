<?php
	//class for login
	class Login{
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

	function __construct($servername, $username, $password){
		$this->servername = $servername;
		$this->username = $username;
		$this->password = $password;
	}

	function

?>
