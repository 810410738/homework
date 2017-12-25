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

  <link rel="stylesheet" href="../../css/skin-blue.min.css">
  <style type="text/css">
    .error{
      color: red;
    }
    .success{
      color: green;
    }
  </style>
  <script type="text/javascript">
    function judge1(){
      var mid = document.getElementById("mid").value;
      var mname = document.getElementById("mname").value;
      var price = document.getElementById("price").value;
      var qoh = document.getElementById("qoh").value;
      var miderror = document.getElementById("miderror");
      var nameerror = document.getElementById("nameerror");
      var priceerror = document.getElementById("priceerror");
      var qoherror = document.getElementById("qoherror");
      var flag = true;
//
      if(mid.length == 0){
        miderror.innerHTML="菜式编号不可以为空！";
        miderror.className="error";
        flag = false;
      }
      else{
        miderror.innerHTML="ok";
        miderror.className="success";
      }
//
      if(mname.length == 0){
        nameerror.innerHTML="菜名不可以为空！";
        nameerror.className="error";
        flag = false;
      }
      else{
        nameerror.innerHTML="ok";
        nameerror.className="success";
      }
//
       if(price.length == 0){
        priceerror.innerHTML="价格不可以为空！";
        priceerror.className="error";
        flag = false;
      }
      else{
          var reg = /^[0-9]+$/; 
          if(!reg.test(price)){ 
            priceerror.innerHTML="价格只能输入数字!";
            priceerror.className="error";
            flag = false;
          }
          else{
             priceerror.innerHTML="ok";
             priceerror.className="success";
          }
      }
// 
       if(qoh.length == 0){
        qoherror.innerHTML="库存不可以为空！";
        qoherror.className="error";
        flag = false;
      }
      else{
          var reg = /^[0-9]+$/; 
          if(!reg.test(qoh)){ 
            qoherror.innerHTML="库存只能输入数字!"; 
            qoherror.className="error";
            flag = false;
          }
           else{
            qoherror.innerHTML="ok";
            qoherror.className="success";
          }
      }

      return flag;
      
    }
    function judge2(){
      var mid = document.getElementById("mid").value;
      var mname = document.getElementById("mname").value;
      var price = document.getElementById("price").value;
      var qoh = document.getElementById("qoh").value;
      var miderror = document.getElementById("miderror");
      var nameerror = document.getElementById("nameerror");
      var priceerror = document.getElementById("priceerror");
      var qoherror = document.getElementById("qoherror");
      var flag = true;
//
      if(mid.length == 0){
        miderror.innerHTML="菜式编号不可以为空！";
        miderror.className="error";
        flag = false;
      }
      else{
        miderror.innerHTML="ok";
        miderror.className="success";
      }
//

      
// 
       if(qoh.length == 0){
        qoherror.innerHTML="库存不可以为空！";
        qoherror.className="error";
        flag = false;
      }
      else{
          var reg = /^[0-9]+$/; 
          if(!reg.test(qoh)){ 
            qoherror.innerHTML="库存只能输入数字!"; 
            qoherror.className="error";
            flag = false;
          }
           else{
            qoherror.innerHTML="ok";
            qoherror.className="success";
          }
      }

      return flag;
    }
    function judge3(){
      var mid = document.getElementById("mid").value;
      var mname = document.getElementById("mname").value;
      var price = document.getElementById("price").value;
      var qoh = document.getElementById("qoh").value;
      var miderror = document.getElementById("miderror");
      var flag = true;
//
      if(mid.length == 0){
        miderror.innerHTML="菜式编号不可以为空！";
        miderror.className="error";
        flag = false;
      }
      else{
        miderror.innerHTML="ok";
        miderror.className="success";
      }
      return flag;
    }

      function judge4(){
      var mid = document.getElementById("mid").value;
      var mname = document.getElementById("mname").value;
      var price = document.getElementById("price").value;
      var qoh = document.getElementById("qoh").value;
      var miderror = document.getElementById("miderror");
      var nameerror = document.getElementById("nameerror");
      var priceerror = document.getElementById("priceerror");
      var qoherror = document.getElementById("qoherror");
      var flag = true;
//
      if(mid.length == 0){
        miderror.innerHTML="菜式编号不可以为空！";
        miderror.className="error";
        flag = false;
      }
      else{
        miderror.innerHTML="ok";
        miderror.className="success";
      }

//
       if(price.length == 0){
        priceerror.innerHTML="价格不可以为空！";
        priceerror.className="error";
        flag = false;
      }
      else{
          var reg = /^[0-9]+$/; 
          if(!reg.test(price)){ 
            priceerror.innerHTML="价格只能输入数字!";
            priceerror.className="error";
            flag = false;
          }
          else{
             priceerror.innerHTML="ok";
             priceerror.className="success";
          }
      }
// 

      return flag;
      
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
      <span class="logo-lg">餐厅<b>管理</b></span>
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
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">管理菜单</li>
        <!-- Optionally, you can add icons to the links -->
        <li ><a href="manage.php"><i class="fa fa-link"></i> <span>查看菜品/库存</span></a></li>
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>添加新菜品/修改库存</span></a></li>
        <li>
          <a href="change_table.php"><i class="fa fa-link"></i> <span>餐桌管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        <li ><a href="get_bill.php"><i class="fa fa-link"></i> <span>收入</span></a></li>
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
        更改库存
        <small>可添加菜式</small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
      
    <form action="save_menu.php" method="post">
<table  class="table">
<tr>
<td >菜式编号</td>
<td ><input  id="mid" type="text" name="mid" size="20"/></td>
<td ><span class="error" id="miderror"></span></td>
</tr>

<tr>
<td >菜名</td>
<td ><input  id="mname" type="text" name="mname" size="20"/></td>
<td ><span class="error" id="nameerror"></span></td>
</tr>

<tr>
<td >价格</td>
<td ><input id="price" type="text" name="price" size="20"/></td>
<td ><span class="error" id="priceerror"></span></td>
</tr>

<tr>
<td >库存</td>
<td ><input id="qoh" type="text" name="qoh" size="20"/></td>
<td ><span class="error" id="qoherror"></span></td>
</tr>

<table>
  
<tr>
<td><input id="input1"  onclick="return judge1()" class="btn btn-info"type="submit" name="submit1" value="添加此菜式"/></td>
<td>&nbsp &nbsp &nbsp &nbsp</td>
<td><input  id="input2" onclick="return judge2()" class="btn btn-info" type="submit" name="submit2" value="修改菜式库存"/></td>
<td>&nbsp &nbsp &nbsp &nbsp</td>
<td><input  id="input4" onclick="return judge4()"  class="btn btn-info" type="submit" name="submit4" value="修改菜式价格"/></td>
<td>&nbsp &nbsp &nbsp &nbsp</td>
<td><input  id="input3" onclick="return judge3()"  class="btn btn-info" type="submit" name="submit3" value="删除此菜式"/></td>
</tr>

</table>


</table>
</form>


      
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      
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