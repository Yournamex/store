<?php
session_start ();
	
	$db = mysqli_connect("localhost", "root", "12345678", "wjstore");
	
	if(isset($_POST['btn'])) 
	{
		
		if(!isset($_SESSION["intline"]))
		{
			$_SESSION["intline"]=0;
			$_SESSION["cid"][0]=$_GET["id"];
			$_SESSION["num"][0]=$_POST["nes"];	
			header("location:cart.php");
		}else
		{
			$_SESSION["intline"]=$_SESSION["intline"]+1;
			$intnewline = $_SESSION["intline"];
			$_SESSION["cid"][$intnewline]=$_GET["id"];
			$_SESSION["num"][$intnewline]=$_POST["nes"];		
			header("location:cart.php");
		}
		
	}
?>