<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>点菜</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/amazeui.min.js" type="text/javascript"></script>
		<link href="css/amazeui.min.css" type="text/css" rel="stylesheet" />
		<link href="css/style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
	<?php 
error_reporting(0); 
header('Content-Type:text/html; charset= utf-8');
include ("conn.php");
mysql_query("set names utf8");

//ÏÈ½ÓÊÕ´«¹ýÀ´µÄÊý¾Ý.
$cid=$_GET[cid];  
$tid=$_GET[tid];  

$query="call choose_table('$tid',$cid);";
// $query="update dinner_table set tstatus=0 ,cid='$cid' where tid='$tid';";
$res = mysql_query($query, $conn);
?>

		<header data-am-widget="header" class="am-header am-header-default sq-head ">
		   <div class="am-header-right am-header-nav">
	          <button type="button" class="am-btn am-btn-warning" id="doc-confirm-toggle" style="background: none; border: 0; font-size: 24px;">
                 <i class="am-header-icon am-icon-trash"></i>
	          </button>
            </div>
	   </header>
	    <div class="content-list" id="outer">
	    	<div class="list-left" id="tab">
	    		<li><a style="position: relative;">新品推荐<i class="num">8</i></a></li>
	    		<li><a >主食</a></li>
	    		<li class="current"><a>匠心烧味</a></li>
	    		<li><a>港式点心</a></li>
	    		<li><a>正宗可可奶盖</a></li>
	    		<li><a>清新果茶</a></li>
	    		<li><a>招牌榴莲奶盖</a></li>
	    		<li><a>部落奶盖系列</a></li>
	    		<li><a>鲜榨果汁</a></li>
	    		<li><a>创意特饮</a></li>
	    		<li><a>纯吃茶</a></li>
	    		<li><a>沙冰系列</a></li>
	    		<li><a>热饮系列</a></li>
	    		<li><a>小吃系列</a></li>
	    	</div>
	    	<div class="list-right" id="content">
	    		<ul class="list-pro">
	    <form action="order.php" method="POST">
	    <!-- 桌子id和客人id不加入循环 -->
	    <input name="cid" type="hidden" value=<?php echo $cid; ?> />
	    <input name="tid" type="hidden" value=<?php echo $tid; ?> />
<?php 

$query = "call show_menu();";    //ÕâÑù¿ÉÄÜÓÐºÜ¶à±êÌâ°üº¬ÓÐÕâËÄ¸ö×ÖµÄÐÂÎÅ¶¼»áÏÔÊ¾³öÀ´. ´ó¼Ò¿ÉÒÔÌí¼Ó¶à¼¸ÌõÐÂÎÅÊÔÊÔ.»¹¿ÉÒÔÓÃOR »òAND ÏÞÖÆ¸ü¶à²éÑ¯Ìõ¼þ.
// $query = "select * from menu;"; 
$res = mysql_query($query, $conn) or die(mysql_error());
$row = mysql_num_rows($res);    //Èç¹û²éÑ¯³É¹¦ÕâÀï·µ»ØÕæ·ñÔòÎª¼Ù
if($row)
{

$i=0;
for($i=0;$i<$row;$i++)            //ÕâÀïÓÃÒ»¸öFOR Óï¾ä²éÑ¯ÏÔÊ¾¶àÌõ½á¹û
{ 
$dbrow=mysql_fetch_array($res);
$mid=$dbrow['mid']; 
$mname=$dbrow['mname']; 
$price=$dbrow['price']; 



?>
	<!-- mid和price -->
	<input name=<?php echo $i."mid"; ?> type="hidden" value=<?php echo $mid; ?> />
	<input name=<?php echo $i."price"; ?> type="hidden" value=<?php echo $price; ?> />
			    	<li>
			    		<a href="detail.html"><img src=<?php echo "img/" . $mid .".jpg"; ?> class="list-pic" /></a>
			    		<div class="shop-list-mid">
		                	<div class="tit"><a href="detail.html"><?php echo $mname; ?></a></div>
		                	<div class="am-gallery-desc">￥<?php echo $price; ?></div>
		                </div>
		                <div class="list-cart">
			                <div class="d-stock ">
					                <a class="decrease">-</a>
					                <input id="num" readonly="" class="text_box" name=<?php echo $i."quantity"; ?> type="text" value="0">
					                <a class="increase">+</a>
			                </div>
		                </div> 
			    	</li>
<?php  
// end for
}
// end if
}

?>
			    			    	
	            </ul>
	    	</div>
	    </div>
	    <!--底部-->
 <div style="height: 100px;"></div>
 <div class="fix-bot">
	   	  <a href="" class="list-js">合计：<i>0元</i><em>(0份)</em></a>
	   	  <input type="submit"  class="list-jsk" value="选好了"/>
 </div>
 </form>
 <div class="am-modal am-modal-confirm" tabindex="-1" id="my-confirm">
  <div class="am-modal-dialog">
    <div class="am-modal-bd" style="height: 80px; line-height: 80px;">  您确定要清空饮品吗？</div>
    <div class="am-modal-footer">
      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span class="am-modal-btn" data-am-modal-confirm>确定</span>
    </div>
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

//tab切换
        $(function(){
                window.onload = function()
                {
                        var $li = $('#tab li');
                        var $ul = $('#content ul');
                        $li.click(function(){
                                var $this = $(this);
                                var $t = $this.index();
                                $li.removeClass();
                                $this.addClass('current');
                                $ul.css('display','none');
                                $ul.eq($t).css('display','block');
                        })
                }
        });
</script>
	</body>
</html>
