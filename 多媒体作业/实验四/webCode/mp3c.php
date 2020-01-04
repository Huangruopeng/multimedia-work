 <!DOCTYPE html>
<html lang="zh-CN">
  <?php include('head.php')?>
  	<?php include('connect.php')?>
  	
  	<link href="css/style2.css" rel="stylesheet">
  		 
  <body>
  
  <?php include("header.php");include('banner.php')?>
  <?php include('function/myimage.php');?>
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
				  <h3 class="title">音频<small>MP3</small></h3>
				</div>
				<?php 
					$sql ="SELECT * FROM media WHERE id = $_GET[id]";
					$result = $mysqli->query($sql);
					if($result->num_rows > 0){
					$row = $result->fetch_assoc();
				?>
					<div class="col-md-12">
						<div class="col-md-6">
						<img src="images/<?php myimage($row['type'])?>"  class="img-responsive">
						</div>
						<div class="col-md-6">
						<h3>歌名：<?php echo $row['title']?></h3>
						<h3>演唱：<?php echo $row['name']?></h3>
						<?php 
										if(isset($_SESSION["username"]) ){
										echo '<a href="media/'.$row['media'].'">下载</a>';
										}else{	
											echo "下载：登录后可以下载";  
										//header("Location: index.php"); 
										}
									?>
						</div>
						<div class="thumbnail">
							  <embed src="media/<?php echo $row['media'] ?>" autostart="1" name="<?php echo $row['title']?>"  loop="-1" type="application/x-mplayer2" width="100%" height="120"></embed>
							<div class=" text-center">
							
								
								<?php echo $row['content']?>
							</div>
							
						</div>
					</div>
			<?php 
					}
				   
			?>
			</div>
			
		</div>
		
		
	</div>
    <?php include('footer.php')?>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    


  <script src="js/index.js"></script>
  </body>
</html>