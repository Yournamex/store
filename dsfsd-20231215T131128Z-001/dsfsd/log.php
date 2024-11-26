<?php

session_start ();

$usr = "";
$pass= "";
$errors = array();

if(!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "Please log in first";
}


$db = mysqli_connect('localhost', 'root', '12345678', 'wjstore');

if(isset($_POST['ulog'])) {
	$usr = mysqli_real_escape_string($db, $_POST['user']);
	$pass = mysqli_real_escape_string($db, $_POST['pass']);
	
	if(empty($usr)) {array_push($errors, "Username is required");}
	if(empty($pass)) {array_push($errors, "Password is required");}
	
	if(count($errors == 0)) {
	$user_check_query = "SELECT * FROM membe WHERE mname = '$usr' AND mpass = '$pass'";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);
	
	if($user){
		
		$_SESSION['i'] = $user['mid'];
		$_SESSION['u'] = $user['mname'];
		$_SESSION['p'] = $user['mpass'];
		$_SESSION['e'] = $user['mmail'];
		
		$_SESSION['success'] = "Log in succesful";
		if ($user['mst']==1) 
		header('location: admin.php');
		else
			header('location: index2.php');
	}
	else
	{
		header('location: login.php');
	}
	}
}