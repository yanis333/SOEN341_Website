
<?php
	include '../config/db_server.php';
	session_start();
	$db = new DB();
	
	//gets information sent from java script in the index
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	$result = $db->query("SELECT username,email FROM user WHERE username='".$username."' OR email='".$email."'");
	$row = $result->fetch_assoc();
	$arrvalue=array();
	if($row!=null){
        $arrvalue[0] =false;

	}
	else{
		
	$sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$password','$email')";

	$db->query($sql);
        $arrvalue[0] = true;
        $arrvalue[1] = $username;
		$_SESSION['username']=$username;

	}
	echo json_encode($arrvalue);
	$db->close();
	

?> 