<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>
	
	<div class="container">
	<nav>
		<div class="logo">
			<img src="img/logo1.png">
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php">หน้าหลัก</a></li>
				<li><a href="pro.php">สินค้า</a></li>
				<li><a href="#">เติมเงิน</a></li>
				<li><a href="#">ติดต่อเรา</a></li>
			</ul>
		</div>
		<div class="login">
			<ul>
				<li><a href="repass.php">แก้ไขสินค้า</a></li>
				<li><a href="repass.php">แก้ไขรหัสผ่าน</a></li>
				<li><a href="index.php">ออกจากระบบ</a></li>
			</ul>
		</div>
	</nav>
		<div class="edit">
			<form action="">
				<label for=""><h3>เลือกสินค้า</h3></label><br>
			<select name="pd" id="pde">
				<option value="lay1">lay1</option>
				<option value=lay2"">lay2</option>
				<option value="drink1">drink1</option>
				<option value="drink2">drink2</option>
			</select><br>
			
			
			<label for=""><h3>ชื่อสินค้า</h3></label><br>
			<input type="text" placehloder="ใส่ชื่อสินค้า"><br>
				<label for=""><h3>จำนวนสินค้า</h3></label><br>
				<input type="number" placeholder="ใส่จำนวนสินค้า"><br>
				<label for=""><h3>ราคา</h3></label><br>
				<input type="text" placeholder="ราคาของสินค้า"><br>
				
				<button type="submit" name="btn1">ยืนยัน</button>
															 
			</form>
			</div>
		</div>
	
</body>
</html>
