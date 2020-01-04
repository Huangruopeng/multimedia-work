 <?php
	header("Content-Type: text/html; charset=utf-8");  
	include("session_admin.php");
	include("../connect.php");
	
?>
<script type="text/javascript"> 
function del() {
var msg = "您真的确定要删除吗？\n\n请确认！";
if (confirm(msg)==true){
return true;
}else{
return false;
}
}
</script> 
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="css/admin.css" rel="stylesheet">
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>用户名</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
		<?php
			
			$sql ="SELECT * FROM  user where status != 1";  	
				$result = $mysqli->query($sql);

					if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
				//var_dump($row);
				//die();
		?>
        <tr class="text-center">
		  <td><?php echo $row['id']?></td>
          <td><?php echo $row['username']?></td>
          <td><a href="edit_user.php?id=<?php echo $row['id']?>">编辑</a> | <a href="del.php?id=<?php echo $row['id']?>" onclick="javascript:return del();">删除</a> | <?php
			if($row['status'] ==0)
			{
		  ?>
			 <a href="onoff.php?type=user&id=<?php echo $row['id']?>">注销</a>
		  <?php
		  }else{
			  ?>
			   <a href="onoff.php?type=reuser&id=<?php echo $row['id']?>">启用</a></td>
			<?php
		  }
		  ?></td>
        </tr>
					<?php }}?>
       
      </tbody>
    </table>
			
		</div>
	</div>
	
</div>
 


