<?php
	// SHELBY: Start the session
	session_start();

	 $servername = "localhost";
	 $username = "ucsku1vnso4wk";
	 $password = "User_Password!";
	 $database = "dbstmz7zfdlhjs";

	session_start();

	// connect to database
	$conn = mysqli_connect($servername, $username, $password, $database);

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
       // coming soon...

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'https://lrsblogging.com');
?>