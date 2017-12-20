<!DOCTYPE html>
<html>
<head>
	<title>
		选择食物
	</title>
	 <!--微信UI-->
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://cdn.bootcss.com/weui/1.1.1/style/weui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css"> 
     <style type="text/css">
        span{
            color: red;
        }
     </style>
</head>
<body>
<?php 
error_reporting(0); 
include ("conn.php");

//ÏÈ½ÓÊÕ´«¹ýÀ´µÄÊý¾Ý.
$cid=$_GET[cid];  
$tid=$_GET[tid];  

$query="call choose_table('$tid',$cid);";
// $query="update dinner_table set tstatus=0 ,cid='$cid' where tid='$tid';";
$res = mysql_query($query, $conn);
?>
<table >

<?php 

$query = "call show_menu();";    //ÕâÑù¿ÉÄÜÓÐºÜ¶à±êÌâ°üº¬ÓÐÕâËÄ¸ö×ÖµÄÐÂÎÅ¶¼»áÏÔÊ¾³öÀ´. ´ó¼Ò¿ÉÒÔÌí¼Ó¶à¼¸ÌõÐÂÎÅÊÔÊÔ.»¹¿ÉÒÔÓÃOR »òAND ÏÞÖÆ¸ü¶à²éÑ¯Ìõ¼þ.
// $query = "select * from menu;"; 
$res = mysql_query($query, $conn) or die(mysql_error());
$row = mysql_num_rows($res);    //Èç¹û²éÑ¯³É¹¦ÕâÀï·µ»ØÕæ·ñÔòÎª¼Ù
if($row)
{
?>

<?php
$i=0;
for($i=0;$i<$row;$i++)            //ÕâÀïÓÃÒ»¸öFOR Óï¾ä²éÑ¯ÏÔÊ¾¶àÌõ½á¹û
{ 
$dbrow=mysql_fetch_array($res);
$mid=$dbrow['mid']; 
$mname=$dbrow['mname']; 
$price=$dbrow['price']; 



?>
	
	<form action="order.php" method="post">
		<input name="tid" type="hidden" value=<?php echo $tid; ?> />

		<input name="mid" type="hidden" value=<?php echo $mid; ?> />
		
		<input name="price" type="hidden" value=<?php echo $price; ?> />
	 <tr>
	 	
		<!-- <input name="quantity" type="text" value=0 /> -->

        <div class="weui-panel__bd">
            <td width="90%">
                <div  class="weui-media-box weui-media-box_appmsg">
                    <div class="weui-media-box__hd">
                        <img class="weui-media-box__thumb" src=<?php echo "img/" . $mname .".jpg"; ?> alt="">
                    </div>
                    <div class="weui-media-box__bd">
                        <h4 class="weui-media-box__title"><?php echo $mname; ?></h4>
                        <p class="weui-media-box__desc"><span>￥<?php echo $price; ?></span>/1份</p>
                    </div>
                </div>
            </td>

            <td> <input name="quantity" type="number" value=0 /> </td>
           <td><input type="submit" class="btn btn-success" name="submit1" value="ok"/> </td>
		   <td><input type="submit" class="btn " name="submit2" value="change"/> </td>
    </tr>
	</form>
<?php  
}
}
else
{
echo "ÎÞÏà¹ØÊý¾Ý";
}
?>
</table>
<a href="/homework/homework.html" style="text-decoration: none" target="_parent"> return
</body>
</html>





