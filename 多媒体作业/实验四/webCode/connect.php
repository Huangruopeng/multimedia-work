
<?php
//连接数据库
	$host="localhost";  
	$db_user="root";  
	$db_pass="";  
	$db_name="mediaweb_db";  
	$timezone="Asia/Shanghai";  
	$mysqli= mysqli_connect($host,$db_user,$db_pass,$db_name);  
	$mysqli->set_charset("utf8");
	if(mysqli_connect_errno($mysqli)) 
	{ 
	   echo "connect error: " . mysqli_connect_error(); 
	}
?>