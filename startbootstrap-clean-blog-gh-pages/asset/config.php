<?php 
	//start thr ob 
	ob_start();
	// define the global variable
	defined("DB_HOST") ? null : define("DB_HOST",'localhost');
	defined("DB_USER") ? null : define("DB_USER",'root');
	defined("DB_PASS") ? null : define("DB_PASS",'');
	defined("DB_NAME") ? null : define("DB_NAME",'blog');
	//make a connection
	$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if(!$connection){
		die("connection failed");
	}
	// every time we import the configuration we import the function too
	require_once("function.php");
?>