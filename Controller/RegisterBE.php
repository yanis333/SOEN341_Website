
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
	$reply_tag_count = json_encode(array());
	 $reply_tag_count = json_decode($reply_tag_count);
	 $reply_tag_count['php']=0;
	 $reply_tag_count = json_encode($reply_tag_count);
	$sql = "INSERT INTO user (username, password, email,reply_tag_count,number_questions,achievements) VALUES ('$username', '$password','$email','$reply_tag_count',0,'')";

	$db->query($sql);
        $arrvalue[0] = true;
        $arrvalue[1] = $username;
		$_SESSION['username']=$username;

	}
	echo json_encode($arrvalue);
	$db->close();
	

?> 
