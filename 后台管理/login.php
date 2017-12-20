<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>登陆</title>
</head>

<body>
<?php
error_reporting(0); 
header('Content-Type:text/html; charset= utf-8');
include ("conn.php");
mysql_query("set names utf8");
$username=$_POST[username];
$password=$_POST[password];


//从数据库获取用户名和密码
$query = "SELECT * from  manage where username='$username'; ";
$res = mysql_query($query,$conn) ;

$dbrow=mysql_fetch_array($res);
$row = mysql_num_rows($res); 

if($row){
	
	if($password==$dbrow[1]){
		$mess= "登陆成功！";
		$url = "manage.php";
		$value = "点击跳转";

	}
	else{
		$mess= "密码错误";
		$url = "login.html";
		$value = "重新登陆";
	}
}
else{
		$mess= "用户名不存在！";
		$url = "login.html";
		$value = "重新登陆";
}

?>

<h1> <?php echo "$mess" ?></h1>
<form action= <?php echo "$url" ?>  method="POST" >
	 <input type="hidden" name="username" value=<?php echo "$username" ?> >	
	  <input class="btn btn-lg btn-primary " type="submit" id="loginBtn" value=<?php echo "$value" ?>>
</form>
</body>
</html>