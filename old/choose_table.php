<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>选桌</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	 <style type="text/css">
        span{
            color: red;
        }
     </style>
</head>
<script>
function warning()
{
 alert("该桌子已经有客人了，请选择其他桌子，谢谢！"); 
} 
function judge(cnum,size)
{
    if(cnum>size){
        alert("该桌子只能坐"+size+"个人，请选其他桌"); 
        return false;
    }
    else{
        alert("选桌成功！"); 
        return true;
    }
}
</script>
<body>
<header>
    <h1>请选择桌子</h1>
</header>
<?php
error_reporting(0); 
header('Content-Type:text/html; charset= utf-8');
include ("conn.php");
mysql_query("set names utf8");

$cnum=$_POST[count];  
$cphone=$_POST[phone];  

$sql = "INSERT INTO customer(cnum,cphone)

VALUES('$cnum','$cphone')";

$result = mysql_query($sql,$conn) or die(mysql_error());  //
if($result)
{
// 查询customer表里当前的cid
$query = "SELECT cid from customer where cnum=$cnum and cphone=$cphone";
$res = mysql_query($query,$conn) or die(mysql_error());
$cid = mysql_fetch_array($res)['cid'];
echo $cid."people";
}
else
{
echo "insert fail !";
}
?>

<!-- 查询所有dinner_table信息 -->
<table class="table">

<?php 
error_reporting(0); 
include ("conn.php");
//mysql_query("set names utf-8");
// $query = "select * from purchases";    //ÕâÑù¿ÉÄÜÓÐºÜ¶à±êÌâ°üº¬ÓÐÕâËÄ¸ö×ÖµÄÐÂÎÅ¶¼»áÏÔÊ¾³öÀ´. ´ó¼Ò¿ÉÒÔÌí¼Ó¶à¼¸ÌõÐÂÎÅÊÔÊÔ.»¹¿ÉÒÔÓÃOR »òAND ÏÞÖÆ¸ü¶à²éÑ¯Ìõ¼þ.
$query = "select * from dinner_table";
$res = mysql_query($query, $conn) or die(mysql_error());
$row = mysql_num_rows($res);    //Èç¹û²éÑ¯³É¹¦ÕâÀï·µ»ØÕæ·ñÔòÎª¼Ù

//要一行显示3个桌子
$flag =0;
for($i=0;$i<$row;$i++)            //ÕâÀïÓÃÒ»¸öFOR Óï¾ä²éÑ¯ÏÔÊ¾¶àÌõ½á¹û
{ 
$dbrow=mysql_fetch_array($res);
$tid=$dbrow['tid']; 
$tstatus=$dbrow['tstatus'];
$tsize=$dbrow['tsize'];
if($flag==0){
	echo "<tr>";
}
$flag++;
?>
		<?php 
		if ($tstatus==1)
		{
			echo "
			<td><a href='../copy/index.php?cid=" . $cid  . "&tid=" . $tid . "'> 
				<div  class='weui-media-box weui-media-box_appmsg'>
                    <div class='weui-media-box__hd'>
                        <img onclick='return judge(".$cnum.",".$tsize.")' class='weui-media-box__thumb' src='img/".$tsize ."desk.jpg' >
                    </div>
                    </a>
                    <div class='weui-media-box__bd'>
                        <h4 class='weui-media-box__title'>桌号:" . $tid . "</h4>
                        <h4 id='".$tsize."size' class='weui-media-box__title'>座位数:" . $tsize . "</h4>
                        <p class='weui-media-box__desc'>空闲</p>
                    </div>
                </div>
             </td>
               ";
		}
		else
		{
			echo "
			<td>
				<div  class='weui-media-box weui-media-box_appmsg'>
                    <div class='weui-media-box__hd'>
                        <img onclick='warning()' class='weui-media-box__thumb' src='img/".$tsize ."desk_red.jpg' >
                    </div>
                    <div class='weui-media-box__bd'>
                        <h4 class='weui-media-box__title'>桌号:" . $tid . "</h4>
                        <h4 class='weui-media-box__title'>座位数:<span>" . $tsize . "</span></h4>
                        <p class='weui-media-box__desc'>已被占用</p>
                    </div>
                </div>
             </td>
               ";
		}
		if($flag==3){
			echo "</tr>";
			$flag=0;
		}
}
?>
</table>
<a href="" style="text-decoration: none" target="_parent"> 返回
</body>
</html>