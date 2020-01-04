<?php 
	function myimage($type) {
		if($type =='mp3'){
			echo 'mp3.jpg';
		}elseif($type == 'mp4'){
			echo 'mp4.jpg';
		}
		else
			echo $type;
		
	}
  ?>