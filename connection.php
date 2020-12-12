<?php
/*
@author Ashutosh Singh
@date 06-11-20
*/
	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
	$dbname = "sctdb";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname,"3306");    
    if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
?>