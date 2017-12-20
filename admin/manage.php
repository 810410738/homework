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
  <link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/changelists.css">
 
  <link rel="stylesheet" href="../../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../js/vendor/iCheck/square/blue.css">

  <link rel="stylesheet" href="../../css/skin-blue.min.css">

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
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>近期活动统计</span></a></li>
        <li><a href="newGame.html"><i class="fa fa-link"></i> <span>发布新比赛/活动</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>人员管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
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
        菜单
        <small>列出所有菜</small>
      </h1>

     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">

<!-- add table.html -->
    <div class="row">
                <!-- Content -->
    <div id="content" class="flex">
      
  <div id="content-main">
      
    <div class="module" id="changelist">

      <form id="changelist-form" method="post" novalidate=""><input type="hidden" name="" value="">
      
<div class="results">
  <table id="result_list">
  <thead>

<tr>
<!-- checkbox -->
<th scope="col" class="action-checkbox-column">
   <div class="text"><span><input type="checkbox" id="action-toggle"></span></div>
   <div class="clear"></div>
</th>

<!-- 循环生成表头 -->
<th scope="col" class="sortable column-id">
   <div class="text"><a href="">Id</a></div>
   <div class="clear"></div>
</th>

</tr>
</thead>


<tbody>

<!-- 循环生成行 -->
<tr class="row1">
<td class="action-checkbox">
<input type="checkbox" name="_selected_action" value="719" class="action-select"></td>
<th class="field-id"><a href="http://39.108.181.169/admin/szupingxie/zhaoxinbaoming/719/change/?_changelist_filters=o%3D4.-3.-2.8.7.6.5">719</a></th><td class="field-name">李璐</td><td class="field-sex">女</td><td class="field-college">人文学院                      </td><td class="field-phone">15889519517</td><td class="field-stu_no">2017012033</td><td class="field-wechat">Smtprincess </td><td class="field-time nowrap">Nov. 12, 2017, 5:09 p.m.</td></tr>

<tr class="row2">
<td class="action-checkbox">
<input type="checkbox" name="_selected_action" value="719" class="action-select"></td>
<th class="field-id"><a href="http://39.108.181.169/admin/szupingxie/zhaoxinbaoming/719/change/?_changelist_filters=o%3D4.-3.-2.8.7.6.5">719</a></th><td class="field-name">李璐</td><td class="field-sex">女</td><td class="field-college">人文学院                      </td><td class="field-phone">15889519517</td><td class="field-stu_no">2017012033</td><td class="field-wechat">Smtprincess </td><td class="field-time nowrap">Nov. 12, 2017, 5:09 p.m.</td></tr>

</tbody>
</table>
</div>

      </form>
    </div>
  </div>
    
    </div>
    <!-- END Content -->
      </div>


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
