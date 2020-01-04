<?php
	include("connect.php");
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <?php include("head.php")?>
  </head>
  <body>
  
	<?php include("header.php");include('banner.php')?>
<div class="center">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				
			<div class="panel panel-default login-box" >
				<div class="panel-body">
				<form class="form-horizontal" action="login_do.php" method="post">
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
					<div class="col-sm-10">
					  <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">密码</label>
					<div class="col-sm-10">
					  <input type="password"  name="password" class="form-control" id="inputPassword3" placeholder="">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-default">登录</button>
					</div>
				  </div>
				</form>
						
					</div>
				</div>
			</div>
		</div>

	</div>
		
		
		
		
</div>
	
</div>
<div class="footer">
	<?php include('footer.php')?>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body> 
</html>