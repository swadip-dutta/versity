<?php 
	
	define('HOST', 'localhost');
	define('ZOOMS', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'versityproject');
	$db = mysqli_connect(HOST, ZOOMS, PASSWORD, DATABASE);

	if (!$db) {
		echo 'console.log("Database connected!")';
	}


	


 ?>