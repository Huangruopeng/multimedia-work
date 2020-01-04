 <?php  
include("session_admin.php");
include("../connect.php");
header("Content-type:text/html;charset=utf-8");  
date_default_timezone_set("Asia/Shanghai");  
include("fileupload.class.php");  
	//var_dump($_POST);
	// die();
	$type='mp3';
	$title=$_POST['title'];
	$name=$_POST['name'];
	$content=$_POST['content'];
	//die();
    $up = new fileupload();  
    //设置属性（上传的位置、大小、类型、设置文件名是否要随机生成）  
    $up->set("path","../media");  
    $up->set("maxsize",50000000); //kb  
    $up->set("allowtype",array("mp3"));//可以是"doc"、"docx"、"xls"、"xlsx"、"csv"和"txt"等文件，注意设置其文件大小  
    
    $up->set("israndname",true);//true:由系统命名；false：保留原文件名  
      
    //使用对象中的upload方法，上传文件，方法需要传一个上传表单的名字name：pic  
    //如果成功返回true，失败返回false  
  
    if($up->upload("pic")){
        //echo '<pre>';  
        //获取上传成功后文件名字  
        /*
		
		var_dump($up->getFileName()); 
        echo '</pre>'; 
		*/
		//var_dump($up);
		//die();
		$file=$up->getFileName();
		//var_dump($file);
		//$image[0];
		
			//$image=$image[0]; 
          
		//die();
		//var_dump($image);
		//$image[0];
		
		$media=$file[0];
		$sql = "insert into media (type,title,name,media,content) values('$type','$name','$title','$media','$content')";  
		//die();		
		$result = $mysqli->query($sql); 
			if($result){  
				
				echo "<script>alert('添加成功！');window.location.href='list_mp3.php' </script>";  
			}else{  
				echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
				//var_dump($up->getErrorMsg());		
			}  
         
    }else{  
        echo '<pre>';  
        //获取上传失败后的错误提示  
        var_dump($up->getErrorMsg());
        //$arr=$up->getErrorMsg();
        //$err=$arr[0];
        //echo "<script>alert('".$err."'); history.go(-1);</script>";
        //echo '</pre>';  
		 //echo "<script>history.go(-1);</script>";  
    }
	
?>  