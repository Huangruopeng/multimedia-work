 <?php 
	include("session_admin.php");
	include("../connect.php");
	$sql ="SELECT * FROM  nav where id = $_GET[id]";
	$result = $mysqli->query($sql);
	$row = $result->fetch_assoc();
?>
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="css/admin.css" rel="stylesheet">
   <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
				<form class="form-horizontal" action="edit_do.php?type=nav" method="post" enctype="multipart/form-data">
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">名称</label>
					<div class="col-sm-10">
					  <input type="text" name="title" value="<?php echo $row['title']?>"  class="form-control" id="exampleInputEmail1" placeholder="">
					  <input type="hidden" name="id" value="<?php echo $row['id']?>">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">URL</label>
					<div class="col-sm-10">
					  <input type="text" name="url" value="<?php echo $row['url']?>"  class="form-control" id="exampleInputEmail1" placeholder="">
					 
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">排序</label>
					<div class="col-sm-10">
					  <input type="text" name="sort" value="<?php echo $row['sort']?>"  class="form-control" id="exampleInputEmail1" placeholder="">
					 
					</div>
				  </div>
				  <div class="col-sm-10 text-center">
				  <button  type="submit" class="btn btn-default text-center">确定</button>
				  </div>
				</form>
				</div>
	 <script src="js/jquery-1.12.0.min.js"></script>
	<script type="text/javascript">
	</script>			
				
