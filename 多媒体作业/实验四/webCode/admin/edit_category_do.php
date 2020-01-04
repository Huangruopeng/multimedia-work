 <?php  
include("session_admin.php");
include("connect.php");
header("Content-type:text/html;charset=utf-8");  
date_default_timezone_set("Asia/Shanghai");  
	$sql = "update category SET name ='$_POST[name]' WHERE id = '$_POST[pid]'"; 
	$result = $mysqli->query($sql); 
	//$num_insert = mysql_num_rows($res_insert);  
	//die();
	if($result)  
	{  
		
		echo "<script>alert('分类名称修改成功！');window.location.href='list_category.php' </script>";  
	}  
	else  
	{  
		echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
	} 
?>  