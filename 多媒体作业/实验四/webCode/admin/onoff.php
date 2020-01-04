 <?php 
	include('session_admin.php');
	include('../connect.php');
	
	if($_GET['id'])
	{
		$type=$_GET['type'];
		switch ($type)
			{
				
				
				
				case 'user':
					
					$sql="UPDATE user SET  status = 2 where id = $_GET[id]";
					//die();
					$result = $mysqli->query($sql);
					if($result)  
					{
					echo "<script>alert('注销成功！'); history.go(-1); </script>";  
					}
					else  
					{
					echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
					}	
			
				
				break;
				
				case 'reuser':
					
					$sql="UPDATE user SET  status = 0 where id = $_GET[id]";
					//die();
					$result = $mysqli->query($sql);
					if($result)  
					{
					echo "<script>alert('启用成功！'); history.go(-1); </script>";  
					}
					else  
					{
					echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
					}	
			
				
				break;
				
				
				
				
			}
	}
	
?>