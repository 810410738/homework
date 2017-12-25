a@@ -0,0 +1,365 @@
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>餐厅管理后台</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">-->
  <!-- Ionicons -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
  <!-- Theme style -->
  <link rel="stylesheet" href="../../css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="../../js/vendor/iCheck/square/blue.css">
  <link rel="stylesheet" type="text/css" href="css/base.css">

  <link rel="stylesheet" href="../../css/skin-blue.min.css">
  <script type="text/javascript">
    function judge(){
      if(){
        
      }
      alert("fuck!");
    }
  </script>
</head>
<?php
error_reporting(0); 
header('Content-Type:text/html; charset= utf-8');
include ("conn.php");
$username= $_POST[username];
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">丹丹<b>餐厅</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="../../img/user_gao.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                      
                    </a>
                  </li>
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="../../img/user_gao.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Another message</p>
                      
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../../img/user_gao.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo "$username"?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../../img/user_gao.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo "$username"?> 
                  <small>这个人很懒 什么也没有留下</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="login.html" class="btn btn-default btn-flat">退出登陆</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../img/user_gao.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo "$username"?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li ><a href="manage.php"><i class="fa fa-link"></i> <span>查看菜品/库存</span></a></li>
        <li ><a href="#"><i class="fa fa-link"></i> <span>添加新菜品/修改库存</span></a></li>
        <li>
          <a href="change_table.php"><i class="fa fa-link"></i> <span>餐桌管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
         <li class="active"><a href="get_bill.php"><i class="fa fa-link"></i> <span>收入</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        每桌收入
        <small>每桌在查询的年月日规模内的收入</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
      
      <?php 
      error_reporting(0); 
      include ("conn.php");
      mysql_query("set names utf8");
      //ÏÈ½ÓÊÕ´«¹ýÀ´µÄÊý¾Ý.
      $year=$_POST[year];  
      $month=$_POST[month];  
      $day=$_POST[day];


      if(!empty($year)&&empty($month)&&empty($day))//select by year
      {
        ?>
        <h2>
          每桌在<?php echo $year ?>年的总收入以及所有桌的总收入
        </h2>
      
        <table class="table">
        
        <tr>
        
        <td>桌号</td>
        <td>年</td>
        <td>年收入</td>
        </tr>

        <?php
        $query = "select tid ,date_format(btime,'%Y') year ,sum(total_price) sum from bill where date_format(btime,'%Y')=$year group by tid;";
        $res = mysql_query($query, $conn);
        $row = mysql_num_rows($res);  
        $s=0; 
        for($i=0;$i<$row;$i++)           
        { 
            $dbrow=mysql_fetch_array($res);
            $tid=$dbrow['tid']; 
            $year=$dbrow['year']; 
            $sum=$dbrow['sum']; 
            $s+=$sum;
            ?>
            <tbody>
            <tr>
            <td ><?php echo $tid ?></td>
            <td ><?php echo $year ?></td>
            <td ><?php echo $sum ?></td>
            </tr></tbody>
            <?php
        }
        ?>
        </table>
        <div class="weui-form-preview__hd">
                <div class="weui-form-preview__item">
                    <label class="weui-form-preview__label">总收入为</label>
                    <em class="weui-form-preview__value"><?php echo $s."元"; ?></em>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <?php
      }
      else if(!empty($year)&&!empty($month)&&empty($day))// by month 
      {
        ?>
        <h2>
          每桌在<?php echo $year ?>年<?php echo $month ?>月的总收入以及所有桌的总收入
        </h2>
        <table class="table">
        <tr>
          <td>桌号</td>
          <td>年</td>
          <td>月</td>
          <td>月收入</td>
        </tr>
 
        <?php
        $query = "select tid,DATE_FORMAT(btime, '%Y' ) year,DATE_FORMAT(btime, '%m' ) month,sum(total_price) sum  from bill where DATE_FORMAT(btime, '%Y' )=$year and DATE_FORMAT(btime, '%m' )=$month group by tid;";
        $res = mysql_query($query, $conn);
        $row = mysql_num_rows($res);   
        $s=0;
        for($i=0;$i<$row;$i++)           
        { 
            $dbrow=mysql_fetch_array($res);
            $tid=$dbrow['tid']; 
            $year=$dbrow['year'];
            $month=$dbrow['month'];  
            $sum=$dbrow['sum']; 
            $s+=$sum;
            ?>
            <tbody>
            <tr>
            <td class="field-name"><?php echo $tid ?></td>
            <td class="field-sex"><?php echo $month ?></td>
            <td class="field-sex"><?php echo $year ?></td>            
            <td class="field-college"><?php echo $sum ?></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
        </table>
        <div class="weui-form-preview__hd">
                <div class="weui-form-preview__item">
                    <label class="weui-form-preview__label">总收入为</label>
                    <em class="weui-form-preview__value"><?php echo $s."元"; ?></em>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <?php

      }
      else if(!empty($year)&&!empty($month)&&!empty($day))// by day
      {
        ?>
        <h2>
          每桌在<?php echo $year ?>年<?php echo $month ?>月<?php echo $day ?>的总收入以及所有桌的总收入
        </h2>
       <table class="table">
        
        <tr>
        <td>桌号</td>
        <td>年</td>
        <td>月</td>
        <td>日</td>
        <td>日收入</td>
        </tr>

        <?php
        $query = "select tid,DATE_FORMAT(btime, '%Y' ) year,DATE_FORMAT(btime, '%m' ) month,DATE_FORMAT(btime, '%e' ) day,sum(total_price) sum  from bill where DATE_FORMAT(btime, '%Y' )=$year and DATE_FORMAT(btime, '%m' )=$month and DATE_FORMAT(btime, '%e' )=$day group by tid;";
        $res = mysql_query($query, $conn);
        $row = mysql_num_rows($res);   
        $s=0;
        for($i=0;$i<$row;$i++)           
        { 
            $dbrow=mysql_fetch_array($res);
            $tid=$dbrow['tid']; 
            $year=$dbrow['year'];
            $month=$dbrow['month'];  
            $day=$dbrow['day'];
            $sum=$dbrow['sum']; 
            $s+=$sum;
            ?>
            <tbody>
            <tr>
            <td class="field-name"><?php echo $tid ?></td>
            <td class="field-sex"><?php echo $year ?></td>
            <td class="field-sex"><?php echo $month ?></td>  
            <td class="field-sex"><?php echo $day ?></td>            
            <td class="field-college"><?php echo $sum ?></td>
            </tr>
            </tbody>
            <?php
        }
        ?>

        </table>
        <div class="weui-form-preview__hd">
                <div class="weui-form-preview__item">
                    <label class="weui-form-preview__label">总收入为</label>
                    <em class="weui-form-preview__value"><?php echo $s."元"; ?></em>
                </div>
            </div>
        </div>

        </div>
        </div>
        </div>
        </div>
        <?php

      }
      ?>




    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      You won't see me :)
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">深大丹丹餐厅</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<script src="../../js/vendor/jquery-1.11.2.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="../../js/vendor/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../js/root.js"></script>

<script src="https://cdn.bootcss.com/echarts/3.5.4/echarts.common.min.js"></script>
<script src="../../js/recentGame.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>