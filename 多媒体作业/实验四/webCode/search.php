 <!DOCTYPE html>
<html lang="zh-CN">
  <?php include('head.php')?>
  <body>
  <?php include('connect.php')?>
  <?php include("header.php");include('banner.php')?>
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
				  <h3 class="title">杜索结果<small>Search</small></h3>
				</div>
				<?php 
					$sql ="SELECT * FROM media WHERE title like '%$_POST[key]%' order by id desc";
					$result = $mysqli->query($sql);
					if($result->num_rows > 0)
					{
						while($row = $result->fetch_assoc())
						{
							if($row['type'] == 'mp3')
							{
								$url = 'mp3c.php?id='.$row['id'];
							}
							elseif($row['type'] == 'mp4')
							{
								$url = 'mp4c.php?id='.$row['id'];
							}
						
				?>
					<div class="col-md-3">
						<div class="thumbnail">
							<a href="<?php echo $url;?>">
							
							<div class="caption text-center">
								<img src="images/<?php echo $row['type'];?>.jpg"  class="img-responsive">
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
	</div>
    <?php include('footer.php')?>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>