 <?php
	header("Content-Type: text/html; charset=utf-8");  
	include("session_admin.php");
	include("../connect.php");
	
?>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="css/admin.css" rel="stylesheet">
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>排庝</th>
          <th>坝称</th>
          <th>URL</th>
         
        </tr>
      </thead>
      <tbody>
		<?php
			//$sql="select * from product t1 left join category t2 on t1.cid = t2.cid order by id desc";  
			$sql ="SELECT * FROM  nav order by sort";  	
				$result = $mysqli->query($sql);

					if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
				//var_dump($row);
				//die();
		?>
        <tr class="text-center">
		  <td><?php echo $row['sort']?></td>
          <td><?php echo $row['title']?></td>
          <td><?php echo $row['url']?></td>
          
		      
		  </td>
        </tr>
					<?php }}?>
       
      </tbody>
    </table>
			
		</div>
	</div>
	
</div>


