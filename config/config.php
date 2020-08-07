<?php
	session_start();

	// Here we are defining the  database
	define('dbhost', 'localhost');
	define('dbuser', 'root');
	define('dbpass', '');
	define('dbname', 'hostel');

	// Connecting to the  database
	try {
		$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
