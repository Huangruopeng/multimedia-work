 <?php 
	include("session_admin.php");
	include("../connect.php");
	//$type=$_GET['type'];
?>
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="css/admin.css" rel="stylesheet">
   <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
				<form class="form-horizontal" action="add_mp3_do.php" method="post" enctype="multipart/form-data">
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">标题</label>
					<div class="col-sm-10">
					  <input type="text" name="title" value=""  class="form-control" id="exampleInputEmail1" placeholder="">
					  
					</div>
				  </div>
				  
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">主唱</label>
					<div class="col-sm-10">
					  <input type="text" name="name" value=""  class="form-control" id="exampleInputEmail1" placeholder="">
					  
					</div>
				  </div>
				  
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">上传MP3</label>
					<div class="col-sm-10">
					
					<input type="file" name="pic[]" value="">
					</div>
					
				  </div>
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">介绍</label>
					<div class="col-sm-10">
					
						<div id="div2"></div>
						<input type="hidden" name="content" id="text1"  value="">
					</div>
					
				  </div>
				  
	
				  
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label"></label>
				  <div class="col-sm-10">
				  <button  type="submit"  id="submit"  class="btn btn-default">确定</button>
				  </div>
				</form>
				</div>
	 <script src="../js/jquery-1.12.0.min.js"></script>
	<script src="../js/wangEditor.min.js"></script>
	<script type="text/javascript">
	$(function(){
		//alert(111);
		i=<?php echo $row['cid']?>;
		//alert(i);
		// $("#jumpMenu").val(要选中的option的value值即可);
         $("#cid").val(i);
    });
	</script>
	<script type="text/javascript">
	
  
	 var E = window.wangEditor
        var editor = new E('#div2')
        var $text1 = $('#text1')
		
		// 隐藏“网络图片”tab
		editor.customConfig.showLinkImg = false
		editor.customConfig.uploadImgShowBase64 = true   // 使用 base64 保存图片
		//editor.customConfig.uploadImgServer = '/upload'  // 上传图片到服务器
        // 将图片大小限制为 3M
		//editor.customConfig.uploadImgMaxSize = 3 * 1024 * 1024
		
		
		
		editor.customConfig.onchange = function (html) {
            // 监控变化，同步更新到 textarea
            $text1.val(html)
        }
		
		
		// 通过 url 参数配置 debug 模式。url 中带有 wangeditor_debug_mode=1 才会开启 debug 模式
		//editor.customConfig.debug = location.href.indexOf('wangeditor_debug_mode=1') > 0
        editor.create()
		
		//editor.txt.html('<p>用 JS 设置的内容</p>')
        // 初始化 textarea 的值
        $text1.val(editor.txt.html())
		//editor.txt.html('<php echo $row[content]?>')

	</script>		
				
