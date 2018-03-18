<?php
session_start();
include ("../config/db_server.php");
$db = new DB();

$return = array();
$return[0]=false;
if(isset($_SESSION['username']))
    if($_SESSION["username"]!=null) {
        $desc = $_POST['desc'];
        $db->query("insert into replylist (description_reply,total_positive,total_negative,IDQuestion,validate,username,date) values('" . $desc . "','0','0','" . $_SESSION['idquestion'] . "','0','" . $_SESSION['username'] . "','" . (string)date('H:i:s d-m-Y') . "') ");
        $db->query("UPDATE questionlog SET number_replies  = (SELECT COUNT(*) from replylist WHERE IDQuestion =" .$_SESSION['idquestion']. ") WHERE ID =".$_SESSION['idquestion']);
        $return[0]=true;
    }



     $tags_reply = $db->query("SELECT * FROM questionlog WHERE ID =".$_SESSION['idquestion']); //select question with concerned tags
	 $result = $tags_reply->fetch_assoc(); // get the row of the concerned questions
     $tags_reply = explode(" ", $result['tags']); // get the tags of the row and explode it
  
	$tags_user = $db->query("SELECT * FROM user WHERE username= '".$_SESSION['username']."'"); // select the user
    $row = $tags_user->fetch_assoc();//get the row of the user
 	$json_tags = json_decode($row['reply_tag_count']);//get the json we want to update

 	for($i=0;$i<count($tags_reply);$i++){
 	    if(!(array_key_exists($tags_reply[$i],$json_tags))){
 	  		$json_tags->$tags_reply[$i]=1;
 	  	}
 	 	else{
 	 		$json_tags->$tags_reply[$i]++;
 	  	}
       }
    
    $tags_user=json_encode($json_tags);
     $db->query("UPDATE user SET reply_tag_count = '" . $tags_user . "' WHERE username='".$_SESSION['username']."'");
     $tags_user = json_decode($tags_user);
    foreach($tags_user as $key => $value){
         if($value==10){
             $db->query("UPDATE user SET achievements =CONCAT(achievements,'!".$key." Connaisseur') WHERE username='".$_SESSION['username']."'");
         }
         if($value==25){
            $db->query("UPDATE user SET achievements =CONCAT(achievements,'!".$key." Master') WHERE username='".$_SESSION['username']."'");
        }

        if($value==50){
            $db->query("UPDATE user SET achievements =CONCAT(achievements,'!".$key." Grandmaster') WHERE username='".$_SESSION['username']."'");
        }
        if($value==100){
            $db->query("UPDATE user SET achievements =CONCAT(achievements,'!".$key." God') WHERE username='".$_SESSION['username']."'");
        }
    }

    echo json_encode($return);
?>