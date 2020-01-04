<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="name">
			
					欢迎来到网站
			
			</div>
			<div class="login">
				
				<?php
					if (!session_id()) session_start();
					if(!isset($_SESSION["username"])){
				?>
					<a href="login.php">请登录</a>　|　<a href="reg.php">免费注册</a></span>
				<?php

					}else{
				?>
					<?php echo $_SESSION["username"];?>　|　<a href="logout.php">[退出]</a>
				<?php
					}
				?>
				<?php 
					if(isset($_SESSION["status"])){
						if($_SESSION["status"]== 1){
							?>
								　｜　<a href="admin/admin.php">[进入后台]</a>
							<?php
								}
						
					} 
				?>
			</div>
			</div>
		</div>
	</div>	
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			
			<img src="images/name.jpg" />
		</div>
		<div class="col-md-9">
			<div class="search">
				<form  style="text-align:center" action="search.php" method="post" class="form-inline">
				  <div class="form-group">	
					<div class="input-group">
					  <input name="key" type="text" class=" search-input form-control" id="exampleInputAmount" placeholder="">
					</div>
				  </div>
				  <button type="submit" class="btn  search-btn">搜索</button>
				</form>
				</div>
		</div>
	</div>
</div>
<div class="navbox">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<ul class="nav nav-pills navmenu">
					
					<?php
						$sql ="SELECT * FROM  nav order by sort"; 
						$result = $mysqli->query($sql);
						if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
					
					?>
					
					<li role="presentation"><a href="<?php echo $row['url']?>"><?php  echo $row['title']?></a></li>
						<?php }}?>
					
					
				</ul>
			</div>
		</div>
	</div>
		

</div>
