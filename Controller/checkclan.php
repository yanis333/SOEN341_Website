
<?php
	include '../config/db_server.php';
	session_start();
	$db = new DB();
	


	
	$result = $db->query("SELECT * FROM user WHERE username='".$_SESSION['username']."'");
	$row = $result->fetch_assoc();
	$arrvalue = $row['clan'];


	echo json_encode($arrvalue);
	$db->close();
	

?> 
