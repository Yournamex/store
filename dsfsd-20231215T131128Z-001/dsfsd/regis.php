<?php

session_start ();

$name = "";
$pass = "";
$email = "";
$conpass = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '12345678', 'wjstore');

if(isset($_POST['uregis'])) {
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$pass = mysqli_real_escape_string($db, $_POST['pass']);
	$conpass = mysqli_real_escape_string($db, $_POST['conpass']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	
	if(empty($name)) {array_push($errors, "Name is required");}
	if(empty($pass)) {array_push($errors, "Password is required");}
	if(empty($conpass)) {array_push($errors, "Confirm Password");}
	if(empty($email)) {array_push($errors, "Email is required");}
	
	$user_check_query = "SELECT * FROM membe WHERE mname = '$name'";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);
	
	if($user){
		if($user['mname'] === $name) {
			array_push($errors, "This username is already exist");
		}
	}
	
		if(count($errors) == 0 ){
		$query = "INSERT INTO membe(mname, mmail, mpass) VALUES('$name', '$email', '$pass')";
		mysqli_query($db, $query);		
		$_SESSION['usr'] = $usr;
		$_SESSION['success'] = "registered";
		
		header('location: index2.php');
	}
	else
	{
		header('location: register.php');
	}
	}

		



?>