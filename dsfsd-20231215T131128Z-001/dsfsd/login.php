<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="register.css">
</head>
<body>
	
	<div class="container">
		<div class="back">
			<h2><a href="index.php">ย้อนกลับ</a></h2>
		</div>
		<form action="log.php" method="post">
		<div class="img">
			<img src="img/logo1.png">
		</div>
		<h1>เข้าสู่ระบบ</h1>
		<div class="input-box">
			<label for="user">ชื่อผู้ใช้งาน</label><br>
			<input type="text" name="user" placeholder="Username">
		</div>
		<div class="input-box">
			<label for="pass">รหัสผ่าน</label><br>
			<input type="text" name="pass" placeholder="Password">
		</div>
			
		<button type="submit" name="ulog">เข้าสู่ระบบ</button>
			
			<div class="regis-link">
				<p>สร้างบัญชี<a href="#">คลิ๊กที่นี่</a></p>
				<p>ลืมรหัสผ่าน<a href="#">คลิ๊กที่นี่</a></p>
			</div>
		</form>
	</div>
	
</body>
</html>