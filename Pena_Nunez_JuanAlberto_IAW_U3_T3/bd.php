<?php
	//$connection = new mysqli("localhost", "root", "2asirtriana", "tf", 3306);
	$connection = new mysqli("192.168.1.58", "root", "Admin2015", "tf", 3316);
    	mysqli_set_charset($connection,"utf8");

	    //TESTING IF THE CONNECTION WAS RIGHT
	if ($connection->connect_errno) {
	    printf("Connection failed: %s\n", $connection->connect_error);
	    exit();
	}
?>