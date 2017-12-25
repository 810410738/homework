<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>结账</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link href="css/amazeui.min.css" type="text/css" rel="stylesheet" />
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<link href="http://res.wx.qq.com/open/libs/weui/1.1.2/weui.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
		<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/amazeui.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/date.js" ></script>
		<script type="text/javascript" src="js/iscroll.js" ></script>
		<script type="text/javascript">
		$(function(){
			$('#beginTime').date();
			$('#endTime').date({theme:"datetime"});
		});
		</script>
	</head>
	<body>

		<header data-am-widget="header" class="am-header am-header-default sq-head ">
		   <div class="am-header-left am-header-nav">
	          <a href="index.html" class="">继续点餐</a>
           </div>
		   <div class="am-header-right am-header-nav">
	          <button type="button" class="am-btn am-btn-warning" id="doc-confirm-toggle" style="background: none; border: 0; font-size: 24px;">
                 <i class="am-header-icon am-icon-trash"></i>
	          </button>
            </div>
	   </header>
	   <div style="height: 49px;"></div>
	    <ul class="eat-list">
<?php
error_reporting(0); 
header('Content-Type:text/html; charset= utf-8');
include ("conn.php");
mysql_query("set names utf8");
//get tid
// $tid=$_POST[tid];
$tid=$_POST[tid];
$cid=$_POST[cid];
//query cnum
$query = "select cnum from customer where cid='$cid';";  
$res = mysql_query($query, $conn) or die(mysql_error());
$cnum=mysql_fetch_array($res)[0];
//
$query = "select * from menu;";   
$res = mysql_query($query, $conn) or die(mysql_error());
$row = mysql_num_rows($res); 
for($i=0;$i<$row;$i++)
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
	    	<li>
	    		<span class="name"><?php echo $mname;?></span>
	    		<em class="price"><?php echo "x".$quantity;?></em>
	    		<div class="d-stock ">
	               <?php echo "￥".$mprice; ?>
			    </div>
	    	</li>
<?php
}
?>

	    </ul>

	    <div class="juli"></div>
	    <ul class="list-detail">
	    	<li class="time">
	    		<span>就餐人数：</span>
	    		<span><?php echo $cnum; ?></span>
	    	</li>
	    	<li class="time">
	    		<span>我的桌号：</span>
	    		<span><?php echo $tid; ?></span>
	    	</li>
	    </ul>
	    <div class="juli"></div>


	<?php 
// insert bill
$query = "INSERT INTO bill(cid,tid,total_price,btime,ispay) VALUES($cid,'$tid',$sum,now(),0)";
$res = mysql_query($query, $conn) or die(mysql_error());
//query the new bill's tid
$query = "select pid from bill where cid=$cid and tid='$tid' and total_price=$sum and ispay=0";
$res = mysql_query($query, $conn) or die(mysql_error());
$pid = mysql_fetch_array($res)[0];

?>	
		
        <div class="juli"></div>
	    <textarea placeholder="备注说明" class="bz-infor"></textarea>
	    <div class="juli"></div>
	    <div class="pricebox">
	    	<p>总价：<i><?php echo $sum; ?></i>元</p>
	    	<p>请选择支付方式并确认下单：</p>
	    	<a href=<?php echo "pay_success.php?pid=".$pid."&sum=".$sum."&cid=".$cid."&tid=".$tid ?> ><button class="paybtn" type="button" > 微信支付</button></a>
	    </div>
	    
		 
		</div>



		<script>
		
		//购物数量加减
		$(function(){
				$('.increase').click(function(){
					var self = $(this);
					var current_num = parseInt(self.siblings('input').val());
					current_num += 1;
					if(current_num > 0){
						self.siblings(".decrease").fadeIn();
						self.siblings(".text_box").fadeIn();
					}
					self.siblings('input').val(current_num);
					update_item(self.siblings('input').data('item-id'));
				})		
				$('.decrease').click(function(){
					var self = $(this);
					var current_num = parseInt(self.siblings('input').val());
					if(current_num > 0){
						current_num -= 1;
		                if(current_num < 1){
			                self.fadeOut();
							self.siblings(".text_box").fadeOut();
		                }
						self.siblings('input').val(current_num);
						update_item(self.siblings('input').data('item-id'));
					}
				})
			})
		//删除提示信息   
		    $(function() {
		  $('#doc-modal-list').find('.am-icon-close').add('#doc-confirm-toggle').
		    on('click', function() {
		      $('#my-confirm').modal({
		        relatedTarget: this,
		        onConfirm: function(options) {
		          var $link = $(this.relatedTarget).prev('a');
		          var msg = $link.length ? '你要删除的饮品 为 ' + $link.data('id') :
		            '确定了';
		//        alert(msg);
		        },
		        onCancel: function() {
		          alert('不删除');
		        }
		      });
		    });
		});
		
		</script>
	</body>
</html>
