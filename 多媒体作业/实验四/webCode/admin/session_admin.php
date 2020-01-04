 <?php
// 启动 Session
session_start();
// 声明一个名为 admin 的变量，并赋空值。
	if(isset($_SESSION["status"]) && $_SESSION["status"] == 1){
		//echo "1";
	}else{	
	header("Location: index.php"); 
	}
?> 