<?php
/*
@author Ashutosh Singh
@date 27-10-2020
*/
	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
	$dbname = "sctdb";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
?>
