<?php 
	include("session_admin.php");
?>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">

<style>
body {
	font:Arial, Helvetica, sans-serif;
	color: #000;
	background-color: #CAE1FF;	
}
.navbox{
	background-color: #3399CC;
	
}
.top{
	background-color:#eee;
	
}
</style>
  <body>
		<div class="top">
  <div class="container">
	<div class="row">
	<div class="col-md-12">
		<div class="name">
			<img src="../images/name.jpg" />
			
		</div>
		<div class="login">
			
			<?php
				if (!session_id()) session_start();
				if(!isset($_SESSION["username"])){
			

				}else{
			?>
				管理员　<?php echo $_SESSION["username"];?>　<a href="logout.php" target="_top">[退出]</a>　｜　<a href="../index.php" target="_top">[返回前台]</a>
				
			<?php
				}
			?>
		</div>
		</div>
	</div>
</div>
</div>
<div class="navbox">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="nav nav-pills">
						<li role="presentation" ><a href="left.php"  target="left">内容管理</a></li>
						<li role="presentation"><a href="user.php" target="left">用户管理</a></li>
						<li role="presentation"><a href="web.php" target="left">网站管理</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
  </body>


