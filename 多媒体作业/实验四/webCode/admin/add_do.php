 <?php  
include("session_admin.php");
include("../connect.php");
header("Content-type:text/html;charset=utf-8");  
date_default_timezone_set("Asia/Shanghai");  
include("fileupload.class.php");  
	var_dump($_POST);
	 die();
	$type=$_POST['type'];
	//die();
    $up = new fileupload();  
    //设置属性（上传的位置、大小、类型、设置文件名是否要随机生成）  
    $up->set("path","../media");  
    $up->set("maxsize",50000000); //kb  
    //$up->set("allowtype",array("gif","png","jpg","jpeg"));//可以是"doc"、"docx"、"xls"、"xlsx"、"csv"和"txt"等文件，注意设置其文件大小  
    switch ($type)
	{
	case 'image':
	   $up->set("allowtype",array("gif","png","jpg","jpeg"));//可以是"doc"、"docx"、"xls"、"xlsx"、"csv"和"txt"等文件，注意设置其文件大小  
	  break;
	case 'mp3':
	   $up->set("allowtype",array("mp3"));//可以是"doc"、"docx"、"xls"、"xlsx"、"csv"和"txt"等文件，注意设置其文件大小  
	  break;
	case 'mp4':
	   $up->set("allowtype",array("mp4"));//可以是"doc"、"docx"、"xls"、"xlsx"、"csv"和"txt"等文件，注意设置其文件大小  
	  break;
	
	} 
    $up->set("israndname",true);//true:由系统命名；false：保留原文件名  
     var_dump($up);
die();	 
    //使用对象中的upload方法，上传文件，方法需要传一个上传表单的名字name：pic  
    //如果成功返回true，失败返回false  
  
    if($up->upload("pic")){
        //echo '<pre>';  
        //获取上传成功后文件名字  
        /*
		var_dump($up->getFileName()); 
        echo '</pre>'; 
		*/
		$file=$up->getFileName();
		//var_dump($image);
		//$image[0];
		
			//$image=$image[0]; 
          
		
		//var_dump($image);
		//$image[0];
		$content=$file[0];
		$sql = "insert into media (type,title,content) values('$type','$_POST[title]','$content')";  
//die();		
		$result = $mysqli->query($sql); 
			if($result){  
				
				echo "<script>alert('添加成功！');window.location.href='list.php' </script>";  
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