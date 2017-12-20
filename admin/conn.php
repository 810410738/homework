<?php 
$hostname = "39.108.181.169"; //Ö÷»úÃû,¿ÉÒÔÓÃIP´úÌæ
$database = "homework"; //Êý¾Ý¿âÃû
$username = "root"; //Êý¾Ý¿âÓÃ»§Ãû
$password = "030821"; //Êý¾Ý¿âÃÜÂë
$conn = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error() , E_USER_ERROR); 
mysql_select_db($database, $conn); 
$db = @mysql_select_db($database, $conn) or die(mysql_error());
?> 