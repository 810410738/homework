<!DOCTYPE html>
<html>
<head>
	<title>
		choose food
	</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
</head>
<body>
<table class="table">
		<td>tid</td>
		<td>mid</td>
		<td>quantity</td>
		<td>mprice</td>
<?php 
error_reporting(0); 
include ("conn.php");
mysql_query("set names utf-8");
//ÏÈ½ÓÊÕ´«¹ýÀ´µÄÊý¾Ý.
$tid=$_POST[tid];
$mid=$_POST[mid];   
$price=$_POST[price];
$quantity=$_POST[quantity];
$mprice=$price * $quantity;


if(!empty($_POST[submit1]))
{
	if($quantity>0)
	{
	$query = "insert into orders(tid,mid,quantity,mprice) values('$tid','$mid',$quantity,$mprice)";
	$res = mysql_query($query, $conn) or die(mysql_error());
	}

		echo $tid;
		echo "  the food you have ordered";
		echo '<br />';

	//echo "ÐÞ¸Ä³É¹¦";
	
}
else if(!empty($_POST[submit2]))
{
	
	if($quantity>0)
	{
	$sql ="update orders set quantity=$quantity,mprice='$mprice' where mid='$mid' ;";
	$result1 = mysql_query($sql,$conn) or die(mysql_error());
	}
	
		echo $tid;
		echo "  the food you have ordered";
		echo '<br />';
	
	
}
$query = "select * from orders where tid='$tid';";    //ÕâÑù¿ÉÄÜÓÐºÜ¶à±êÌâ°üº¬ÓÐÕâËÄ¸ö×ÖµÄÐÂÎÅ¶¼»áÏÔÊ¾³öÀ´. ´ó¼Ò¿ÉÒÔÌí¼Ó¶à¼¸ÌõÐÂÎÅÊÔÊÔ.»¹¿ÉÒÔÓÃOR »òAND ÏÞÖÆ¸ü¶à²éÑ¯Ìõ¼þ.
	$res = mysql_query($query, $conn) or die(mysql_error());
	$row = mysql_num_rows($res);    //Èç¹û²éÑ¯³É¹¦ÕâÀï·µ»ØÕæ·ñÔòÎª¼Ù
	if($row)
	{
	$i=0;
	for($i=0;$i<$row;$i++)            //ÕâÀïÓÃÒ»¸öFOR Óï¾ä²éÑ¯ÏÔÊ¾¶àÌõ½á¹û
	{ 
	$dbrow=mysql_fetch_array($res);
	$tid=$dbrow['tid'];
	$mid=$dbrow['mid']; 
	$quantity=$dbrow['quantity']; 
	$mprice=$dbrow['mprice']; 
	?>
		
		<tr>

			<td><input name="tid" type="text" value=<?php echo $tid; ?> /></td>
			
			<td><input name="mid" type="text" value=<?php echo $mid; ?> /></td>
			
			<td><input name="quantity" type="text" value=<?php echo $quantity; ?> /></td>

			<td><input name="mprice" type="text" value=<?php echo $mprice; ?> /></td>
			
		</tr>
	
	<?php  
	}
	}
	else
	{
	echo "ÎÞÏà¹ØÊý¾Ý";
	}
	?>
	</table>
	<table>
	<tr>

	<form action="pay.php" method="post">

	
		<input name="tid" type="hidden" value=<?php echo $tid; ?> />
		<td><input type="submit" class="btn btn-info" name="submit2" value="pay"/> </td>
		
	
	</form>
	</tr>
	</table>

</body>
</html>

