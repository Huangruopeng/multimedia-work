 <?php 
	include("session_admin.php");
	include("connect.php");
	$sql ="SELECT * FROM  category where id = $_GET[id]";
	$result = $mysqli->query($sql);
	$row = $result->fetch_assoc();
?>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/admin.css" rel="stylesheet">
   <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
				<form class="form-horizontal" action="edit_category_do.php" method="post" enctype="multipart/form-data">
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">名　　称</label>
					<div class="col-sm-10">
					  <input type="text" name="name" value="<?php echo $row['name']?>"  class="form-control" id="exampleInputEmail1" placeholder="">
					  <input type="hidden" name="pid" value="<?php echo $row['id']?>">
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
				
