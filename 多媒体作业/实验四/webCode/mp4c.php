 <!DOCTYPE html>
<html>
<head>
<?php include('head.php');
// 启动 Session
if (!session_id()) session_start();
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />

<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/willesPlay.css"/>
<script src="js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/willesPlay.js" type="text/javascript" charset="utf-8"></script>
<?php include('connect.php')?>
</head>
<body>
 <?php include("header.php");include('banner.php')?>
 <?php include('function/myimage.php');?>
 <?php 
	$sql ="SELECT * FROM media WHERE id = $_GET[id]";
	$result = $mysqli->query($sql);
	if($result->num_rows > 0){
	$row = $result->fetch_assoc();
?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
						<img src="images/<?php myimage($row['type'])?>"  class="img-responsive">
						</div>
						<div class="col-md-6">
						<h3>标题：<?php echo $row['title']?></h3>
						<h3>主演：<?php echo $row['name']?></h3>
						<?php 
										if(isset($_SESSION["username"]) ){
										echo '<a href="media/'.$row['media'].'">下载</a>';
										}else{	
											echo "下载：登录后可以下载";  
										//header("Location: index.php"); 
										}
									?>
						</div>
	</div>
	
	<div class="row">
		
		<div class="col-md-12">
		
			<div id="willesPlay">
	<div class="playHeader">
		<div class="videoName"><?php echo $row['title'];?></div>
	</div>
	<div class="playContent">
		
		<video width="100%" height="100%" id="playVideo">
			<source src="media/<?php echo $row['media'];?>" type="video/mp4"></source>
			当前浏览器不支持 video直接播放，点击这里下载视频： <a href="/">下载视频</a>
		</video>
		<div class="playTip glyphicon glyphicon-play"></div>
	</div>
	<div class="playControll">
		<div class="playPause playIcon"></div>
		<div class="timebar">
			<span class="currentTime">0:00:00</span>
			<div class="progress">
				<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
				</div>
			<span class="duration">0:00:00</span>
		</div>
		<div class="otherControl">
			<span class="volume glyphicon glyphicon-volume-down"></span>
			<span class="fullScreen glyphicon glyphicon-fullscreen"></span>
			<div class="volumeBar">
					<div class="volumewrap">
						<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 8px;height: 40%;"></div>
					</div>
						</div>
				</div>
		</div>
	</div>
</div>
		<div style="text-align:center">
		<?php 
			if(isset($_SESSION["username"]) ){
			echo '<a href="media/'.$row['media'].'">下载</a>';
			}else{	
				echo "登录后可以下载";  
			//header("Location: index.php"); 
			}
		?>
		</div>
		<div><?php echo $row['content'];?></div>	
		</div>
	</div>
</div>
<?php }?>
	<?php include('footer.php')?>
<div style="text-align:center;clear:both;">
	<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
	<script src="/follow.js" type="text/javascript"></script>
</div>
</body>
</html>
