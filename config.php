<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "techcode_india", "Tech@2020", "techcode_blog2");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'https://www.sabarish.techcodes.in/projects/blog2/');
?>