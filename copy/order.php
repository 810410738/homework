<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		choose food
	</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
</head>
<body>
<table class="table">
		<td>桌号</td>
		<td>菜名</td>
		<td>数量</td>
		<td>价格</td>
<?php 
error_reporting(0); 
include ("conn.php");
mysql_query("set names utf8");
//ÏÈ½ÓÊÕ´«¹ýÀ´µÄÊý¾Ý.

$query = "select * from menu;";   
$res = mysql_query($query, $conn) or die(mysql_error());
$row = mysql_num_rows($res);    
$tid=$_POST[tid];
$cid=$_POST[cid];
?>

<form action="pay.php" method="POST">
<input name="tid" type="hidden" value=<?php echo $tid; ?> />
<input name="cid" type="hidden" value=<?php echo $cid; ?> />
<?php
for($i=0;$i<$row;$i++)
{
	$mid=$_POST[$i.mid];   
	$price=$_POST[$i.price];
	$quantity=$_POST[$i.quantity];
	$mname=$_POST[$i.mname];
	if($quantity==0)
		continue;
	$mprice=$price * $quantity;
	?>
	<input name=<?php echo $i."mid"; ?> type="hidden" value=<?php echo $mid; ?> />
	<input name=<?php echo $i."price"; ?> type="hidden" value=<?php echo $price; ?> />
	<input name=<?php echo $i."quantity" ?> type="hidden" value=<?php echo $quantity; ?> />
	<input name=<?php echo $i."mprice" ?> type="hidden" value=<?php echo $mprice; ?> />
	<tr>

			<td><?php echo $tid; ?></td>
			
			<td><?php echo $mname; ?></td>
			
			<td><?php echo $quantity; ?></td>

			<td><?php echo $mprice; ?></td>
			
	</tr>
		
	
	<?php  
}



	?>
	</table>
	<table>
	<tr>
	<td>

	<a href="index.php?tid=$tid&cid=$cid" >
		<botton class="btn btn-info" name="submit1">修改订单</botton>
		
	</a>

	</td>
	<td width=50>&nbsp;</td>
		
	<td><input type="submit" class="btn btn-info" name="submit2" value="支付订单"/> </td>
		
	</form>
	</tr>
	</table>

</body>
</html>

