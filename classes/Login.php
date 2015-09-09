<?php
	//class for login
	class Login{
		private $servername = NULL;
		private $dbname = NULL;
		private $username = NULL;
		private $password = NULL;
		private $DSN = NULL;
		private $connect = NULL;
		private $DBH = NULL;

	function __construct($servername,$username, $password,$dbname){
		$this->servername = $servername;
		$this->username = $username;
		$this->password = $password;
		$this->dbname = $dbname;

	}
	function connectDB(){
		$this->DSN = "mysql:host=$this->servername; dbname=$this->dbname";
		try{
		 $this->DBH = new PDO($this->DSN, $this->username,$this->password);
		 }
		 catch (PDOException $e){
			echo $e->getMessage();
		 }
	}
	function checkLogin($email,$pass){
		$tmpDBH = $this->DBH;
		$STH = $tmpDBH->query('SELECT email, password FROM users');
		$STH->setFetchMode(PDO::FETCH_ASSOC);
		while ($row=$STH->fetch()) {
			if($row['email']==$email && $row['password']==$pass){
				echo "SUCCESS!!!";
			}
		}
	}

}


?>
