<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>register</title>
	<link rel="stylesheet" href="register.css">
</head>

<body>
	
	<div class="container1">
		<div class="back1">
			<h2><a href="index.php">ย้อนกลับ</a></h2>
		</div>
		<form action="regis.php" method="post">
		<div class="img">
			<img src="img/logo1.png">
		</div>
		<h1>สมัครสมาชิก</h1>
		<div class="input-box">
			<label for="name">ชื่อผู้ใช้งาน</label><br>
			<input type="text" name="name" placeholder="Username">
		</div>
		<div class="input-box">
			<label for="pass">รหัสผ่าน</label><br>
			<input type="text" name="pass" placeholder="Password">
		</div>
		<div class="input-box">
			<label for="conpass">ยืนยันรหัสผ่าน</label><br>
			<input type="text" name="conpass" placeholder="Confirm Password">
		</div>
		<div class="input-box">
			<label for="email">อีเมล</label><br>
			<input type="email" name="email" placeholder="Email">
		</div>
			
		<button type="submit" name="uregis">เข้าสู่ระบบ</button>
			
			<div class="regis-link">
				<p>สร้างบัญชี<a href="#">คลิ๊กที่นี่</a></p>
				<p>ลืมรหัสผ่าน<a href="#">คลิ๊กที่นี่</a></p>
			</div>
		</form>
	</div>
	
</body>
</html>
