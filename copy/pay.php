<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>结账</title>
	 <!--微信UI-->
    <link href="http://res.wx.qq.com/open/libs/weui/1.1.2/weui.min.css" rel="stylesheet">
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		 #red{
			color: red;
		}
	</style>
</head>

<body>

<div class="page__bd">
        <div class="weui-form-preview">

<?php
error_reporting(0); 
header('Content-Type:text/html; charset= utf-8');
include ("conn.php");
mysql_query("set names utf8");
//get tid
// $tid=$_POST[tid];
$tid=$_POST[tid];
$cid=$_POST[cid];
for($i=0;$i<3;$i++)
{
    $mid=$_POST[$i.mid];   
    $price=$_POST[$i.price];
    $quantity=$_POST[$i.quantity];
    $mprice=$_POST[$i.mprice];
    if($quantity>0)
    {
    $query = "insert into orders(tid,mid,quantity,mprice) values('$tid','$mid',$quantity,$mprice)";
    $res = mysql_query($query, $conn) or die(mysql_error());
    }
}

//echo $tid;
// 查询orders表里tid
$query = "SELECT mname,quantity,mprice from orders o,menu m where o.tid='$tid' and m.mid=o.mid; ";
$res = mysql_query($query,$conn) or die(mysql_error());
$row = mysql_num_rows($res); 
$sum=0;

for($i=0;$i<$row;$i++) {
	$dbrow=mysql_fetch_array($res);
	$mname=$dbrow['mname'];
	$quantity=$dbrow['quantity'];
	$mprice=$dbrow['mprice'];
	$sum+=$mprice;

?>
            <div class="weui-form-preview__bd">
                <div class="weui-form-preview__item">
                    <label class="weui-form-preview__label"> <?php echo $mname . "*" . "<span id='red'>" . $quantity . "</span>"; ?></label>
                    <span class="weui-form-preview__value"><?php echo $mprice; ?></span>
                </div>
            </div>
<?php
}
?>
            <div class="weui-form-preview__hd">
                <div class="weui-form-preview__item">
                    <label class="weui-form-preview__label">付款金额</label>
                    <em class="weui-form-preview__value"><?php echo $sum; ?></em>
                </div>
            </div>


            <div class="weui-form-preview__ft">
                <a class="weui-form-preview__btn weui-form-preview__btn_primary" href="javascript:">付款</a>
            </div>


        </div>
</div>


<?php 

//query dinner_table's cid
$query = "SELECT cid from dinner_table where tid='$tid'";
$res = mysql_query($query, $conn) or die(mysql_error());
$cid=mysql_fetch_array($res)['cid'];
// insert bill
$query = "INSERT INTO bill(cid,tid,total_price) VALUES($cid,'$tid',$sum)";
$res = mysql_query($query, $conn) or die(mysql_error());

$query = "update dinner_table set tstatus=1 where tid='$tid';";
$res = mysql_query($query, $conn) or die(mysql_error());

$query = "delete from orders where tid='$tid';";
$res = mysql_query($query, $conn) or die(mysql_error());

?>


</body>
</html>