<?php
	include '../config/db_server.php';
	$db = new DB();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	
	
	$sql = "INSERT INTO register (username, pw, email) VALUES ('$username', '$password','$email')";
	$db->query($sql);
	$db->close();
	

?> 
 