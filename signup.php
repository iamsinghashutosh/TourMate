<?php
# @Author: Ashutosh Singh <ashutosh>
# @Date:   2020-10-15T16:52:12+05:30
# @Last modified by:   ashutosh
# @Last modified time: 2020-11-11T00:20:39+05:30



	//error_reporting(0
	//session_start();
	include("connection.php");

		$name = $_POST['name'];
		$email = $_POST['email'];
		$gen = $_POST['gender'];
        // $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $pass = $_POST['pass'];
        $sql = "INSERT INTO registration(name,dob,gender,email,pass) VALUES('$name','$dob','$gen','$email','$pass')";


        if(! $conn->query( $sql)) {
            echo 'Could not enter data: ' . $conn->error;
        }
		else{
			$msg='Congratulations!! you have signed up successfully.';
			$_SESSION['msg']=$msg;

			header('location:index.html');
		}

        $conn->close();

?>
