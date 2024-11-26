<?php 
session_start ();
include 'car.php';
$db = mysqli_connect('localhost', 'root', '12345678', 'wjstore');
$id=$_GET['id'];
$sql = "select * from product where pid='$id'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cart</title>
	<link rel="stylesheet" href="cart.css">
</head>

<body>
	
	<div class="tbody">
		<table border="2" width="600" cellspacing="5" cellpadding="5">
			<tr align="center">
				<th colspan="20">ข้อมูลการสั่งซื้อ</th>
			</tr>
			
			<tr align="center" class="tr2">
				<td width="5%">ลำดับ</td>
				<td width="30%">ชื่อสินค้า</td>
				<td width="15%">จำนวน</td>
				<td width="15%">ราคา</td>
			</tr>
			<?php
					$price=0;
					$sumprice=0;
					$m=1;
					$type="";
					for($i=0; $i<=(int)$_SESSION["intline"]; $i++)
					{		
						if($_SESSION["cid"][$i] !="")
						{
							$query = "select * from product where pid='".$_SESSION["cid"][$i]."'";
							$result = mysqli_query($db,$query);
							$f = mysqli_fetch_array($result);
								$price = $f['pprice'];
							$sum = $price * $_SESSION["num"][$i];
							$sumprice = $sumprice + $sum;
						}
					?>
                        <tr align="center" bgcolor="#FFFFFF">
                            <td width="5%" class="rd3">
                                <?php echo $m; ?>     
                            </td>
                            <td width="50%" class="rd3">
                                <?php echo $f['pname']; ?>                           
                            </td>
                            <td width="15%" class="rd3">
                                <?php echo $_SESSION["num"][$i];?>
                            </td>
                            <td width="15%" class="rd3">
                                <?php echo $sum;?>
                            </td>
                    	</tr>
                    <?php
						$m=$m+1;
					}
					$_SESSION["sumall"] = $sumprice;
					?>
                    <tr align="center" bgcolor="#FFFF00">
                    <td colspan="3" class="rd3">ยอดรวมสุทธิ</td>
                    <td width="5%" class="rd3"><?php echo $sumprice; ?></td>
                    </tr>
			<tr align="center">
                    	<td colspan="8">
                          	<form method="post" action="ord.php">                        
                            	<button onClick="location.href='index2.php'" type="button" class="bt4">กลับหน้ารายการ</button>
                            	<button type="submit" class="bt4">ซื้อ</button>
                            </form>

                        </td>
                    </tr>
<!--
			<tr align="center" class="tr2">
				<td width="5%">1</td>
				<td width="30%"></td>
				<td width="15%"></td>
				<td width="15%"></td>
				<td width="15%"></td>
			</tr>
-->
			
<!--
			<tr align="center" class="tr2">
				<td colspan="4">ยอดรวมท้ังหมด</td>
				<td width="5%">0</td>
			</tr>
-->
			
			<tr>
<!--
				<td>
					<form action="" method="post">
						
					</form>
				</td>
-->
			</tr>
		</table>
	</div>
	
</body>
</html>
