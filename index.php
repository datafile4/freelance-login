<?php

	function __autoload($class){
		include "classes/".$class.".php";
	}
	$servername = 'localhost';
	$username = 'root';
	$password = 'kuroi';
	$dbname = 'freelance';
	$login = new Login($servername, $username, $password, $dbname);
	$login->connectDB();
	$login->checkLogin('debianmik@gmail.com','123');
?>
