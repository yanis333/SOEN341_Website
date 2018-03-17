<?php include("../config/db_server.php");

session_start();
$db = new DB();

// receive data from ajax and insert into db
$valuearr=array();
$valuearr[0]=false;
if(isset($_SESSION['username']))
if ($_SESSION['username']!=null) {
    $questiontitle = $_POST['questiontitledb'];
    $description = $_POST['descriptiondb'];
    $tags = $_POST['tagsdb'];

    date_default_timezone_set('America/Montreal'); 
    $date = (string)date('H:i:s d-m-Y');

    $db->query("INSERT INTO questionlog (title,description,date,user, tags) VALUES('" . $questiontitle . "','" . $description . "','" . $date . "','".$_SESSION['username']."','". strtolower($tags) ."')");

    /* counts number of questions asked & puts it in a column in user table in DB */
    $db->query("UPDATE user SET number_questions = (SELECT COUNT(*) from questionlog where user ='".$_SESSION['username']."') where username = '".$_SESSION['username']."'");
   
    $num_questions = $db->query("SELECT number_questions from user where username = '".$_SESSION['username']."'");
    while($result = $num_questions -> fetch_assoc()){

    /* concat achievements in DB user achievement */
    /* UPDATE user SET achievements = "" */
	    if($result['number_questions']==1){
	    	$db->query("UPDATE user SET achievements = concat(achievements, '!Beginning of a journey') where username = '".$_SESSION['username']."'");
	    }

	    if($result['number_questions']==5){
	    	$db->query("UPDATE user SET achievements = concat(achievements, '!Down the rabbit hole') where username = '".$_SESSION['username']."'");
	    }

	    if($result['number_questions']==10){
	    	$db->query("UPDATE user SET achievements = concat(achievements, '!Curiosity killed the cat') where username = '".$_SESSION['username']."'");
	    }

	    if($result['number_questions']==25){
	    	$db->query("UPDATE user SET achievements = concat(achievements, '!Still not enough') where username = '".$_SESSION['username']."'");
	    }

	    if($result['number_questions']==50){
	    	$db->query("UPDATE user SET achievements = concat(achievements, '!Gotta ask them all') where username = '".$_SESSION['username']."'");	
	    }

	    if($result['number_questions']==100){
	    	$db->query("UPDATE user SET achievements = concat(achievements, '!Database breaker') where username = '".$_SESSION['username']."'");	
	    }
	}

    $db->close();
    $valuearr[0]=true;
}
echo json_encode($valuearr);
?>