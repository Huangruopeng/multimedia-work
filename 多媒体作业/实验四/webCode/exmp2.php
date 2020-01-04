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
echo "<h1>实验二、图像处理 </h1>"; 

echo "<h2>一、实验题目</h2>";
echo "图像处理<br>
要求：<br>
（1）选取适当的图片素材和世界地图，运用各种选取方法制作一幅由世界名胜照片揉和在一起的背景。利用图层效果制作一幅有地形质感的世界地图。调整并合并所有层存储为各种图像文件格式并压缩。<br>
（2）显示一个bmp文件的C程序，并实现图像亮度、对比度调整、图像平移、放大、旋转和镜像。<br>
<br>
提交内容：<br>
图片素材、合成图片、显示bmp的程序代码、显示bmp的可执行文件、实验报告（电子版+打印版）。<br>
<br>";

echo "<h2>二、实验环境</h2>";
echo "（1）操作系统：macOS<br>
操作软件：Photoshop<br>
（2）操作系统：windows10<br>
操作软件：Qt5<br>
<br>";

echo "<h2>三、实验设计</h2>";
echo "（1）合成图片<br>
1、寻找素材<br>
2、导入Photoshop<br>
3、分别将不同图片导入不同图层，进行相应的处理<br>
4、合成每一个图层，并导出图片<br>
<br>
（2）操作bmp文件程序<br>
1、编写底层功能函数代码<br>
2、图形化操作界面<br>
3、测试程序代码<br>
4、完善代码<br>

<br>";

echo "<h2>四、实验展示</h2>";
?>
				<div class="page-header">
				  <h3 class="title">实验二Photoshop图片成品展示<small>PNG</small></h3>
                </div>
             <!-- <div class="col-md-3">-->
						<div class="thumbnail">														
							<div class="caption text-center">
								<img src="images/worldmap.png"  width="700" height="500"> <!--class="img-responsive">-->
								<p><?php echo $row['title']?></p>
								
							</div>
							</a>
						
                    
                </div>
        </div>



        <div class="col-md-12">
				<div class="page-header">
				  <h3 class="title">实验二Photoshop图片素材展示<small>PNG</small></h3>
                  </div>
				<?php 
					$sql ="SELECT * FROM media WHERE type = 'png' order by id desc";
					$result = $mysqli->query($sql);
					if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
				?>
                		<div class="col-md-3">
						<div class="thumbnail">														
							<div class="caption text-center">
								<img src="images/Psimages/<?php myimage($row['media'])?>"   width="200" height="200"> <!--class="img-responsive">-->
								<p><?php echo $row['title']?></p>
								
							</div>
							</a>
						</div>
					</div>
			<?php 
					}
				}else{  
				 mysql_error(); 
				 }     
			?>
			</div>
        </div>

	
	<?php
	echo "<h2>五、实验文档</h2>";
	?>
	<object data="多媒体实验二.pdf" type="application/pdf" width="100%" height="800px"></object>
	</div>

    <?php include('footer.php')?>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>