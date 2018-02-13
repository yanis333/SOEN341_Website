
<?php
	include '../config/db_server.php';
	$db = new DB();
	
	//gets information sent from java script in the index
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	$result = $db->query("SELECT username,email FROM user WHERE username='".$username."' OR email='".$email."'");
	$row = $result->fetch_assoc();
	
	if($row!=null){
		echo false;
	}
	else{
		echo true;
	$sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$password','$email')";

	$db->query($sql);
	}
	//insert username, password and email into the user table of the database
	
	$db->close();
	

?> 
