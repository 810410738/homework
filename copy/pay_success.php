<!doctype html>
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>支付成功</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1， user-scalable=0, maximum-scale=1.0">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <!--微信UI-->
    <link href="https://cdn.bootcss.com/weui/1.1.1/style/weui.min.css" rel="stylesheet">

    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css"><--></-->
    <script src="../../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <style type="text/css">
        span{
            color:red;
        }
      
    </style>
</head>

<body>

    <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<?php
error_reporting(0); 
$pid=$_GET[pid];
$cid=$_GET[cid];
$sum=$_GET[sum];
$tid=$_GET[tid];
header('Content-Type:text/html; charset= utf-8');
include ("conn.php");
mysql_query("set names utf8");
//
// 更新桌子状态
$query = "update dinner_table set tstatus=1 where tid='$tid';";
$res = mysql_query($query, $conn) or die(mysql_error());
//删除
$query = "delete from orders where tid='$tid';";
$res = mysql_query($query, $conn) or die(mysql_error());


//
$query = "update bill set ispay=1 where pid=$pid;";  
$res = mysql_query($query, $conn) or die(mysql_error());
//add customer jifen
$query = "select jifen from customer where cid=$cid;";  
$res = mysql_query($query, $conn) or die(mysql_error());
$jifen = mysql_fetch_array($res)[0];

$jifen +=$sum;
$query = "update customer set jifen=$jifen where cid=$cid;";  
$res = mysql_query($query, $conn) or die(mysql_error());
?> 


<div class="weui-msg">　　　　　　　　　　　　　　　　　　　　　　
    <div class="weui-msg__icon-area"><i class="weui-icon-success weui-icon_msg"></i></div>
    <div class="weui-msg__text-area">
        <h2 class="weui-msg__title">支付成功</h2>
        <p class="weui-msg__desc">本次消费你获得<span><?php echo $sum; ?></span>积分<br>当前总积分为<span><?php echo $jifen; ?></span>
        </p>
    </div>
    <div class="weui-msg__opr-area">
        <p class="weui-btn-area">
            <a href="../login/index.html" class="weui-btn weui-btn_primary">确定</a>
            <!-- <a href="javascript:history.back();" class="weui-btn weui-btn_default"></a> -->
        </p>
    </div>
  
</div>

    
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <!--<script src="../js/vendor/bootstrap.min.js"></script>-->

</body>

</html>