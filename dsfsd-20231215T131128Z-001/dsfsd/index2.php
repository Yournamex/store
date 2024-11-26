<?php

session_start();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>wjstorex</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	
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
<!--				<li><a href="#">บัญชีผู้ใช้งาน</a></li>-->
				<li><a href="repass.php">แก้ไขรหัสผ่าน</a></li>
				<li><a href="index.php">ออกจากระบบ</a></li>
			</ul>
		</div>
	</nav>
	<div class="banner1">
		<img src="img/banner1.png">
	</div>
	<div class="container1">
		<div class="title">
			<h1>หมวดหมู่แนะนำ</h1>
<!--			<a href="pro.php"><h1>สินค้าเพิ่มเติม</h1></a>-->
		</div>
		<div class="banner-con">
			<div class="banner-list">
				<div class="bannerimg">
					<a href="#"><img src="img/banner-snack1.jfif"></a>
				</div>
			</div>
			<div class="banner-list">
				<div class="bannerimg">
					<a href="#"><img src="img/water1.jfif"></a>
				</div>
			</div>
			</div>
		</div>
	<div class="container2">
		<div class="title2">
			<h1>สินค้าแนะนำ</h1>
<!--			<a href="pro2.php"><h1>สินค้าทั้งหมด</h1></a>-->
		</div>
		<div class="product-con">
			<div class="product-item">
				<form action="car.php?id=1" method="post">
				<?php 
                                    $db = mysqli_connect('localhost', 'root', '12345678', 'wjstore');
                                    $sql = "select * from product where pid='1'";
                                    $result = mysqli_query($db,$sql);
                                    $row = mysqli_fetch_array($result);
                                ?>
				<div class="product-img">
					<img src="img/lay4.png" height="300px">
				</div>
				<div class="product-detail">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, ex!
				</div>
				<div class="product-price">
					<div class="product-left">
						<?php echo $row['pprice']; ?>บาท
					</div>
					<div class="product-right">
						<span>จำนวน<?php echo $row['pamount']; ?> ชิ้น</span>
					</div>
				</div>
					<input type="number" value="0" min=<?php if($row['pamount']=="0") echo 0; else echo 1; ?> max=<?php echo $row['pamount']; ?> required name="nes">
					<button type="submit" name="btn">สั่งซื้อสินค้า</button>
				</form>
			</div>
			<div class="product-item">
				<form action="car.php?id=2" method="post">
				<?php 
                                    $db = mysqli_connect('localhost', 'root', '12345678', 'wjstore');
                                    $sql = "select * from product where pid='2'";
                                    $result = mysqli_query($db,$sql);
                                    $row = mysqli_fetch_array($result);
                                ?>
				<div class="product-img">
					<img src="img/lay2.png" height="300px">
				</div>
				<div class="product-detail">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, ex!
				</div>
				<div class="product-price">
					<div class="product-left">
						<?php echo $row['pprice']; บาท?>
					</div>
					<div class="product-right">
						<span>จำนวน<?php echo $row['pamount']; ?> ชิ้น</span>
					</div>
				</div>
					<input type="number" value="0" min=<?php if($row['pamount']=="0") echo 0; else echo 1; ?> max=<?php echo $row['pamount']; ?> required name="nes">
					<button type="submit" name="btn">สั่งซื้อสินค้า</button>
				</form>
			</div>
			<div class="product-item">
				<form action="car.php?id=3" method="post">
				<?php 
                                    $db = mysqli_connect('localhost', 'root', '12345678', 'wjstore');
                                    $sql = "select * from product where pid='3'";
                                    $result = mysqli_query($db,$sql);
                                    $row = mysqli_fetch_array($result);
                                ?>
				<div class="product-img">
					<img src="img/drink4.png">
				</div>
				<div class="product-detail">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, ex!
				</div>
				<div class="product-price">
					<div class="product-left">
						<?php echo $row['pprice']; บาท?>
					</div>
					<div class="product-right">
						<span>จำนวน<?php echo $row['pamount']; ?> ชิ้น</span>
					</div>
				</div>
					<input type="number" value="0" min=<?php if($row['pamount']=="0") echo 0; else echo 1; ?> max=<?php echo $row['pamount']; ?> required name="nes"> 
					<button type="submit" name="btn">สั่งซื้อสินค้า</button>
				</form>
			</div>
			<div class="product-item">
				<form action="car.php?id=4" method="post">
				<?php 
                                    $db = mysqli_connect('localhost', 'root', '12345678', 'wjstore');
                                    $sql = "select * from product where pid='4'";
                                    $result = mysqli_query($db,$sql);
                                    $row = mysqli_fetch_array($result);
                                ?>
				<div class="product-img">
					<img src="img/drink3.png">
				</div>
				<div class="product-detail">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, ex!
				</div>
				<div class="product-price">
					<div class="product-left">
						<?php echo $row['pprice']; บาท?>
					</div>
					<div class="product-right">
						<span>จำนวน<?php echo $row['pamount']; ?> ชิ้น</span>
					</div>
				</div>
					<input type="number" value="0" min=<?php if($row['pamount']=="0") echo 0; else echo 1; ?> max=<?php echo $row['pamount']; ?> required name="nes">
					<button type="submit" name="btn">สั่งซื้อสินค้า</button>
				</form>
			</div>
		</div>
	</div>
	<footer>Copyright &copy;2023 Designed by Paranyu Klinthuesin</footer>

	
</body>
</html>