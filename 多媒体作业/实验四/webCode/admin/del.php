 <?php 
	header("Content-type:text/html;charset=utf-8"); 
	include('../connect.php');
	
	if($_GET['id']){
		
				
		$sql="delete from user where id = $_GET[id]";
		$result = $mysqli->query($sql);
		if($result)  
		{
		echo "<script>alert('删除成功！') history.go(-1);</script>";  
		}
		else  
		{
		echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
		}
			
	}
?>