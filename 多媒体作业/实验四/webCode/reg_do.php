 <?php
    header("Content-Type: text/html; charset=utf-8");  
	if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册")
    {

		$user=$_POST['username'];
        $psw = $_POST["password"];
        $psw_confirm = $_POST["confirm"];
		if($user == "" || $psw == "" || $psw_confirm == "")
        {
            echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
        }
        else
        {
            if($psw == $psw_confirm)  
            {  
                include_once("connect.php");  
                $sql = "select username from user where username = '$_POST[username]'"; //SQL语句  
                $result = $mysqli->query($sql);    //执行SQL语句  
                $num = $result->num_rows; //统计执行结果影响的行数  
                if($num)    //如果已经存在该用户  
                {  
                    echo "<script>alert('用户名已存在'); history.go(-1);</script>";  
                }  
                else    //不存在当前注册用户名称  
                {  
                    $sql = "insert into user (username,password) values('$_POST[username]','$_POST[password]')";  
                    $result = $mysqli->query($sql); 
                    //$num_insert = mysql_num_rows($res_insert);  
                    if($result)  
                    {  
                        echo "<script>alert('注册成功！'); window.location.href='login.php'</script>";  
                    }  
                    else  
                    {  
                        echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                    }  
                }  
            }  
            else  
            {  
                echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
?>  