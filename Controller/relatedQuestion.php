<?php 
include("../config/db_server.php");
session_start();
$db = new DB();


$result= $db->query("select * from questionlog where ID ='".$_SESSION['idquestion']."'"); // query to find the tag
$tags = $result->fetch_assoc(); // give the row with the right tag $tags['tags']
$searchedTags = explode(" ", $tags['tags']);
$result3= $db->query("select * from questionlog WHERE ID != '".$_SESSION['idquestion']."'"); // gives you everything in the db

$finalArray=array();

while ($finalrow= $result3->fetch_assoc()) { // goes row by row
	
	$splittedtag =explode(" ", $finalrow['tags']);// array contains 1 tag value in each cell of the row you wanna compare to the searched tags
	for($j = 0; $j <(count($searchedTags));$j++){
		for($i =0; $i<(count($splittedtag));$i++){
		    $yanis1=$splittedtag[$i];
		    $yanis2=$searchedTags[$j];
		    $yanis = strcmp($splittedtag[$i],$searchedTags[$j]);
			if((string)$splittedtag[$i]==(string)$searchedTags[$j]){ // checks if tag you want is here
				$finalArray[]= $finalrow;// put the row in an array
				break 2;
			}
		}
	}
}


echo json_encode($finalArray); // array with all the rows that contain the tag you need


?>