<?php
session_start ();
$db = mysqli_connect('localhost', 'root', '12345678', 'wjstore');
$id=$_GET['id'];
$sql = "select * from product where pid='$id'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);

//แทรกรายการลงในตาราง orders
$uid = $_SESSION['i'];
$totals = $_SESSION["sumall"];
$sql1 = "insert into orders (mid, oamount) VALUES('$uid', '$totals')";
mysqli_query($db, $sql1);

//แทรกรายการลงในตาราง odetail
$rows=mysqli_query($db, "SELECT MAX(oid) AS MAX_ID FROM orders");
$ooid = mysqli_fetch_array($rows);
$oid = $ooid['MAX_ID'];

$totals=0;
for($j=0; $j<=(int)$_SESSION["intline"]; $j++)
{		
	if($_SESSION["cid"][$j] !="")
	{
		$query = "select * from product where pid='".$_SESSION["cid"][$j]."'";
		$result3 = mysqli_query($db,$query);
		$f = mysqli_fetch_array($result3);
		
//		if(($_SESSION["typec"][$j]) =="h")
//		{
//			$totals = $f['thot'];
//		}
//		if(($_SESSION["typec"][$j]) =="c")
//		{
//			$totals = $f['tcold'];
//		}
//		if(($_SESSION["typec"][$j]) =="f")
//		{
//			$totals = $f['tfrap'];
//		}
		$totals = $f['pprice'];
		$sums = $totals * $_SESSION["num"][$j];
		$totalstock = (int)$f['pamount'] - $_SESSION["num"][$j];
		$insql = "insert into ordetal (oid, pid, oramount, unitprice, orprice) VALUES('$oid', '".$_SESSION["cid"][$j]."', '".$_SESSION["num"][$j]."',$totals,$sums)";
		mysqli_query($db, $insql);
		
		$upstocks = "update product set pamount='$totalstock' where pid='".$_SESSION["cid"][$j]."'";
		mysqli_query($db, $upstocks);
	}
}
unset($_SESSION["intline"]);
unset($_SESSION["cid"]);
unset($_SESSION["num"]);
header("location:index2.php");
?>