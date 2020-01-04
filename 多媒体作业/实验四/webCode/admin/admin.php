 <?php
	include("session_admin.php");
	header("Content-Type: text/html; charset=utf-8");  


?>

	<frameset rows="120,*"  frameborder="no">
        <frame name="top" src="top.php">
        <frameset cols="15%,*"  frameborder="no">
            <frame name="left" src="left.php"> 
            <frame name="home" src="right.php"> 
        </frameset>
</frameset>