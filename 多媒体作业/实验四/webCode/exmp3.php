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
  
	echo "<h1>实验三、动画制作 </h1>"; 

	echo "<h2>一、实验题目</h2>";
	echo "动画制作（30分）<br>
	要求：<br>
	根据实验1中得到的歌曲或配乐朗诵，做一段Flash不少于1分半钟，并合成为一段动画MV。<br>
	<br>
	提交内容：<br>
	动画素材、Flash源文件、Flash导出影片、实验报告（电子版+打印版）。<br>
	<br>";
	
	echo "<h2>二、实验环境</h2>";
	echo "	操作系统：windows10	<br>
	开发软件：Flash CS3 pro	<br>
	<br>";
	
	echo "<h2>三、实验设计</h2>";
	echo "1、确定主题，和第一次实验合成的音乐相对应	<br>
	2、寻找素材	<br>
	3、做动画	<br>
	4、音乐和动画合成	<br>
	5、导出视频	<br>
	<br>";
	
	echo "<h2>四、实验成品</h2>";

?>

			
				<div class="page-header">
				  <h3 class="title">视频成品<small>MP4</small></h3>
				</div>
				<?php 
					$sql ="SELECT * FROM media WHERE type = 'mp4' order by id desc";
					$result = $mysqli->query($sql);
					if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
				?>
					<div class="col-md-3">
						<div class="thumbnail">
							<a href="mp4c.php?id=<?php echo $row['id']?>">
							
							<div class="caption text-center">
								<img src="images/<?php myimage($row['type'])?>"  class="img-responsive">
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
	
	

				<div class="page-header">
				  <h3 class="title">实验三Flash动画图片素材展示<small>JPG</small></h3>
                  </div>
				<?php 
					$sql ="SELECT * FROM media WHERE type = 'jpg' order by id desc";
					$result = $mysqli->query($sql);
					if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
				?>
                		<div class="col-md-3">
						<div class="thumbnail">														
							<div class="caption text-center">
								<img src="images/Flashimages/<?php myimage($row['media'])?>"   width="200" height="200"> <!--class="img-responsive">-->
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

<?php
	echo "<h2>五、实验文档</h2>";
?>
	<object data="多媒体实验三.pdf" type="application/pdf" width="100%" height="800px"></object>			
		
</div>
		
    <?php include('footer.php')?>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>