<?php
session_start();
// print_r($_POST);

	if(isset($_POST['login'])){


	$username = "ali";
	$password = "123";

	if($username == $_POST['username'] && $password == $_POST['password']){

		// echo "valid user";
		$_SESSION['fullname'] = "Ali Khan";
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;

		header("location: dashboard.php");

	}else{

		header("location: index.php?msg=Invalid Username/Password...!");
	}


	}



?>