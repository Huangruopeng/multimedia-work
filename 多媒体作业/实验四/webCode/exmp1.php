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
echo "<h1>实验一、音频处理 </h1>"; 

echo "<h2>一、实验题目</h2>";
echo "音频采集与处理<br>
用Windows录音机录制一首自己唱的歌或朗诵，准备一段背景音乐，使用Cool Edit导入录制的声音文件和背景音乐，并进行合成。<br>
提交内容：<br>
背景音乐文件、声音文件、合成作品、实验报告（电子版+打印版）。<br>
<br>";

echo "<h2>二、实验环境</h2>";
echo "	操作系统：windows10<br>
合成软件：Cool Edit Pro<br>
录制设备：普通麦克风<br>
<br>";

echo "<h2>三、实验设计</h2>";
echo "1、找一首歌曲，根据自己的喜好选择。<br>
2、听歌曲，练习翻唱。<br>
3、准备背景音乐。<br>
4、使用Windows录音机录制自己清唱的歌曲。<br>
5、使用Cool Edit导入录制的声音文件。<br>
6、调整音轨，使得清唱能和配乐相符合。<br>
7、合成导出音乐。<br>
<br>";

echo "<h2>四、实验成品</h2>";
?>

				<div class="page-header">
				  <h3 class="title">音频展示<small>MP3</small></h3>
				</div>
				<?php 
					$sql ="SELECT * FROM media WHERE type = 'mp3' order by id desc";
					$result = $mysqli->query($sql);
					if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
				?>
					<div class="col-md-3">
						<div class="thumbnail">
							<a href="mp3c.php?id=<?php echo $row['id']?>">
							
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
		</div>

	<?php 
	echo "<h2>五、实验文档</h2>";
	?>
	<object data="多媒体实验一.pdf" type="application/pdf" width="100%" height="800px"></object>
	</div>

<?php include('footer.php')?> 
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>