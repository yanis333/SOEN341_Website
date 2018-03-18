<?php include("../config/db_server.php");
session_start();
$db = new DB();



 $result = $db->query("SELECT * from replylist where username= '".$_SESSION['username']."'");

 $sum = 0;
 
 while($row = $result->fetch_assoc())
	
{	
	$sum+=$row['total_positive'];
 }	

if($sum ==10){
	$db->query("UPDATE user SET achievements = concat(achievements,'!10 total upvotes') where username = '".$_SESSION['username']."' && achievements NOT LIKE '%10 total upvotes%'");
}

if($sum ==100){
	$db->query("UPDATE user SET achievements = concat(achievements,'!100 total upvotes') where username = '".$_SESSION['username']."' && achievements NOT LIKE '%300 total upvotes%'");
}
if($sum ==500){
	$db->query("UPDATE user SET achievements = concat(achievements,'!500 total upvotes') where username = '".$_SESSION['username']."' && achievements NOT LIKE '%500 total upvotes%'");
}
if($sum ==1000){
	$db->query("UPDATE user SET achievements = concat(achievements,'!1000 total upvotes') where username = '".$_SESSION['username']."' && achievements NOT LIKE '%1000 total upvotes%'");
}
while($row = $result->fetch_assoc())
	
{
	if($row['total_positive'] == 10){
		$db->query("UPDATE user SET achievements = concat(achievements,'!10 upvotes for a reply') where username = '".$_SESSION['username']."' && achievements NOT LIKE '%10 upvotes%'");
	}

	if($row['total_positive'] ==100){
		$db->query("UPDATE user SET achievements = concat(achievements,'!100 upvotes for a reply') where username = '".$_SESSION['username']."'&& achievements NOT LIKE '%100 upvotes%'");
	}
	
	if($row['total_positive'] == 500){
		$db->query("UPDATE user SET achievements = concat(achievements,'!500 upvotes for a reply') where username = '".$_SESSION['username']."' && achievements NOT LIKE '%500 upvotes%'");
	}
	
	if($row['total_positive'] == 1000){
		$db->query("UPDATE user SET achievements = concat(achievements,'!1000 upvotes for a reply') where username = '".$_SESSION['username']."' && achievements NOT LIKE '%600 upvotes%'");
	}	
 }
 $achievements = $db->query("SELECT * from achievements where username= '".$_SESSION['username']."'");
?>

 
