<?php

session_start();

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>resetpassword</title>
	<link rel="stylesheet" href="repass.css">
</head>

<body>
	
	<div class="container">
		<div class="back">
			<h2><a href="index.php">ย้อนกลับ</a></h2>
		</div>
		<form action="rep.php" method="post">
		<div class="img">
			<img src="img/logo1.png">
		</div>
		<h1>แก้ไขรหัสผ่าน</h1>
		<div class="input-box">
			<label for="op">รหัสผ่านเก่า</label><br>
			<input type="text" name="op" placeholder="Old Password">
		</div>
		<div class="input-box">
			<label for="np">รหัสผ่านใหม่</label><br>
			<input type="text" name="np" placeholder="New Password">
		</div>
			
		<button type="submit" name="cha_user">ยืนยัน</button>
			
<!--
			<div class="regis-link">
				<p>สร้างบัญชี<a href="#">คลิ๊กที่นี่</a></p>
				<p>ลืมรหัสผ่าน<a href="#">คลิ๊กที่นี่</a></p>
			</div>
-->
		</form>
	</div>
	
</body>
</html>
