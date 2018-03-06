<?php
session_start();
include("../config/db_server.php");
$db = new DB();
$arrayQuestionask=array();
$arrayQuestionreply=array();
$result = $db->query("select * from questionlog where user='".$_SESSION['username']."'");
while($row = $result->fetch_assoc()){
    $arrayQuestionask[] = $row;
}
$result = $db->query("SELECT * FROM questionlog WHERE ID IN(SELECT DISTINCT(IDQuestion) FROM replylist WHERE username='".$_SESSION['username']."')");
while($row = $result->fetch_assoc()){
    $arrayQuestionreply[] = $row;
}
$db->close();
$finalarr=array();
$finalarr[0]=$arrayQuestionask;
$finalarr[1]=$arrayQuestionreply;
echo json_encode($finalarr);


