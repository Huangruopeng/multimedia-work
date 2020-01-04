 <?php 
	include('session_admin.php');
	include('../connect.php');
	
	if($_GET['id']){
		
				$sql="SELECT media FROM  media where id = $_GET[id]";
				$result = $mysqli->query($sql);
				if($result->num_rows > 0)
				{
					$row = $result->fetch_assoc();
					//echo $row['media'];
					$filename = '../media/'.$row['media'];
					//删除
					if(file_exists($filename))
					{
						$info ='<script>alert("删除成功!"); history.go(-1); </script>';
						unlink($filename);
						$sql="delete from media where id = $_GET[id]";
						$result = $mysqli->query($sql);
					}else{
						$info ="<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
					}
					echo $info;
					//die();
				}		
				/*		
				$sql="delete from media where id = $_GET[id]";
				$result = $mysqli->query($sql);
				if($result)  
				{
				echo "<script>alert('删除成功！'); history.go(-1); </script>";  
				}
				else  
				{
				echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
				}
				*/
			}
	
?>