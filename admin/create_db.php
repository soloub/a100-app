<?php
	include "cred_ext.php";

	//build connection to DB
	$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);

	//verify connection
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL:" . mysqli_connect_error();
	}

	// Create database
	$db_name = "applications_db";

	$sql = "CREATE DATABASE" . $db_name;
	if(mysqli_query($con,$sql)) {
		echo "Database" . $db_name . "created successfully. \n";
	}
	else {
		echo "Error creating database: " . mysqli_error($con);
	}

	// Close DB connection
	mysqli_close($con);

?>