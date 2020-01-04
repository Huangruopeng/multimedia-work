 <?php
	header("Content-Type: text/html; charset=utf-8");  
	include("session_admin.php");
	include("../connect.php");
	//$type=$_GET['type'];
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
          <th>类型</th>
          <th>标题</th>
          <th>编辑</th>
        </tr>
      </thead>
      <tbody>
		<?php
			//$sql="select * from media order by id desc";  
			$sql ="SELECT * FROM  media where type = 'mp4'  order by id desc";  	
				$result = $mysqli->query($sql);

					if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
				//var_dump($row);
				//die();
		?>
        <tr class="text-center">
		  <td><?php echo $row['id']?></td>
		  <td><?php echo $row['type']?></td>
          <td><?php echo $row['title']?></td>
          <td><a href="edit_mp4.php?id=<?php echo $row['id']?>">编辑</a>
		      <a href="del_mp4.php?id=<?php echo $row['id']?>"  onclick="javascript:return del();">删除</a>
		  </td>
        </tr>
					<?php }}?>
       
      </tbody>
    </table>
			
		</div>
	</div>
	
</div>


