<?php  
include("session_admin.php");
include("../connect.php");
header("Content-type:text/html;charset=utf-8");  
date_default_timezone_set("Asia/Shanghai");  
	
		if (in_array("", $_POST))
		  {
		  echo "<script>alert('数据不能为空！'); history.go(-1);</script>";  
		  }
		else
		  {
		  	$sql = "update user SET password ='$_POST[password]' WHERE id = '$_POST[id]'"; 
			$result = $mysqli->query($sql); 
			//$num_insert = mysql_num_rows($res_insert);  
			//die(); 
			if($result)  
				{  	
				echo "<script>alert('修改成功！');window.location.href='list_user.php' </script>";  
				}  
			else  
				{  
				echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
				} 	
		  }



?>  