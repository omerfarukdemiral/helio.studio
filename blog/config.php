<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "blog_db");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://192.168.1.99/blog/');
?>