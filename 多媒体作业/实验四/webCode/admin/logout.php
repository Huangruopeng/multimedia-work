 <?php
session_start();

//注销登录

    unset($_SESSION['status']);
    unset($_SESSION['username']);
	unset($_SESSION['gwc']);
    //echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
	echo "<script>alert('注销登录成功！');</script>";
	header("Location: ../index.php"); 
    exit;
?>