
<?php
	include '../config/db_server.php';
	session_start();
	$db = new DB();
	
	//gets information sent from java script in the index
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$reply_tag_count = json_encode (json_decode ("{}"));

	$img=$_POST['img'];
	$valueImg=array();

	switch($img){

		case "One Piece Clan":
            $_SESSION['img'] =1;
            $valueImg[0]=1;
            $valueImg[1]=0;
			break;
        case "Uchiha Clan":
            $_SESSION['img'] =2;
            $valueImg[0]=2;
            $valueImg[1]=0;
            break;
        case "Dragon Ball Clan":
            $_SESSION['img'] =3;
            $valueImg[0]=3;
            $valueImg[1]=0;
            break;
        case "Bleach Clan":
            $_SESSION['img'] =4;
            $valueImg[0]=4;
            $valueImg[1]=0;
            break;
	}


	
	$result = $db->query("SELECT username,email FROM user WHERE username='".$username."' OR email='".$email."'");
	$row = $result->fetch_assoc();
	$arrvalue=array();
	if($row!=null){
        $arrvalue[0] =false;

	}
	else{


  $valuearrImg = json_encode($valueImg);
	$reply_tag_count = json_encode(array());
	 $reply_tag_count = json_decode($reply_tag_count);
	 $reply_tag_count['php']=0;
	 $reply_tag_count = json_encode($reply_tag_count);
	$sql = "INSERT INTO user (username, password, email,reply_tag_count,number_questions,achievements,clan) VALUES ('$username', '$password','$email','$reply_tag_count',0,'','$valuearrImg')";


	$db->query($sql);
        $arrvalue[0] = true;
        $arrvalue[1] = $username;
		$_SESSION['username']=$username;

	}
	echo json_encode($arrvalue);
	$db->close();
	

?> 
