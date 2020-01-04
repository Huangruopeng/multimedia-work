<!DOCTYPE html>
<html lang="zh-CN">
  <?php include('head.php')?>
  <body>
  <?php include('connect.php')?>
  <?php include("header.php");include('banner.php')?>
  <?php include('function/myimage.php');?>
    <div class="container">
		<div class="row">


       
<div class="col-md-12">
<?php
echo "<h1>实验四、网站制作 </h1>"; 

echo "<h2>一、实验题目</h2>";
echo "4.网站制作（30分）<br>
要求：<br>
个人页面开发，包含个人基本信息，整个课程的各次实验信息，并实现媒体文件上传、下载功能实现。<br>
<br>
提交内容：<br>
网页制作素材、网页源代码、实验报告（电子版+打印版）。<br>
<br>";

echo "<h2>二、实验环境</h2>";
echo "操作系统：windows10<br>
开发语言：php<br>
本地服务器：使用软件WampServer<br>
数据库：mysql<br>
<br>";

echo "<h2>三、实验设计</h2>";
echo "1、学习巩固相关语言<br>
2、使用WampServer软件，搭建本地网站运行环境<br>
3、编写网页主体代码<br>
4、建立数据库<br>
5、将之前所有作业整合到网页内<br>
6、完善网页内容和布局<br>
<br>";

echo "<h2>四、实验展示</h2>";
echo "就是该网站，网页截图可以查看：多媒体实验四.pdf文档，里面有详细的网页截图<br>";

echo "<h2>五、实验文档</h2>";
?>
<object data="多媒体实验四.pdf" type="application/pdf" width="100%" height="800px"></object>
</div>
</div>
    <?php include('footer.php')?>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>