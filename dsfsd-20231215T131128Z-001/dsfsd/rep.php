<?php

session_start ();

$id= "";
$opass = "";
$pass = "";
$errors = array();

if(!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "Please log in first";
}

$db = mysqli_connect('localhost', 'root', '12345678', 'wjstore');

if(isset($_POST['cha_user'])) {
	$id = mysqli_real_escape_string($db, $_SESSION['i']);
	$opass = mysqli_real_escape_string($db, $_POST['op']);
	$pass = mysqli_real_escape_string($db, $_POST['np']);
	
	if(empty($id)) {array_push($errors, "ID is required");}
	if(empty($opass)) {array_push($errors, "Please input new name");}
	if(empty($pass)) {array_push($errors, "Username is required");}
	
	if(count($errors) == 0) {
	$user_check_query = "SELECT * FROM membe WHERE mid = '$id' AND mpass = '$opass'";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);
	if($user) {
			$query = "UPDATE membe SET mpass = '$pass' WHERE mid ='$id'";
			mysqli_query($db, $query);
	
			$_SESSION['p'] = $pass;

			$_SESSION['success'] = "Changed";
			header('location: index2.php');
	}
	}
	}
?>