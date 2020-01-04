<!DOCTYPE html>
<html lang="zh-CN">
  <?php include('head.php')?>
  <body>
  <?php include('connect.php')?>
  <?php include("header.php");include('banner.php')?>
  
  <div class="container">
		<div class="row">
		<div class="col-md-12">

  <?php
  
echo "<h1> 多媒体实验网站介绍</h1>"; 
echo "<h2>网站内容</h2>";

echo "网站主要分为五个版块：首页介绍，实验一，实验二，实验三以及实验四。<br>";
echo "网站分为普通用户登录，可以浏览访问网页。和管理员登录，可以调整网页内容。<br>";
echo "普通用户：可以查看四次实验的介绍，包括实验题目介绍，实验成果，实验素材以及实验文档。同时普通用户可以实现下载多媒体文件<br>";
echo "管理员用户：可以通过登录手段 （用户名和密码均是admin）进入管理员界面,进入界面后可以上传多媒体文件，同时也可以进行用户管理。<br>";
echo "<h2>网站结构</h2>";
echo "使用mysql数据库存储用户，多媒体文件信息。采用多用户模式，分为普通用户和管理员模式。<br>";
echo "<h2>网站版权</h2>";
echo "班级：2016211303_______姓名：黄若鹏_______学号：2016212901<br>";


?>

   
    
   
    
    <?php include('footer.php')?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>