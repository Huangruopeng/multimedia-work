 <?php
	header("Content-type:text/html;charset=utf-8");
	include_once("connect.php");  
	session_start();
	$_SESSION["status"] = null;
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from user where username = '$username' and password = '$password' and status !=2";
	$result = $mysqli->query($sql);
	$num = $result->num_rows;
        if($num)  
            {  
                $row = $result->fetch_assoc();  //将数据以索引方式储存在数组中 
				$status = $row["status"];
				if($status == 1){
					$_SESSION["status"] = 1;//管理员
					$_SESSION["username"] = $username;
					header("Location: admin/admin.php"); 
				}
				else
				{
					$_SESSION["status"] = 0;//普通用户
					$_SESSION["username"] = $username;
					$_SESSION["uid"] = $row['id'];
					header("Location: index.php"); 
				}
            }  
            else  
            {  
                echo "<script>alert('用户名密码不正确或已注销！');history.go(-1);</script>";  
            }  	
?>