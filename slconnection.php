<?php

$servername="localhost";
//$username="w2gu7clcyh1l";
//$password="Laad@1969";
//$dbname="sllegalservices";	
$dbname="sl_legal_services";
$username="root";
$password="";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	
?>