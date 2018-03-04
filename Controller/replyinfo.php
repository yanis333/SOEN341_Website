<?php
session_start();
include ("../config/db_server.php");
$arrainfo=array();
$arraytlist = array();
$db= new DB();

$result = $db->query("Select * from replylist where IDQuestion ='".$_SESSION['idquestion']."'");

while($row = $result->fetch_assoc()){
    $arraytlist[] = $row;
}
$result = $db->query("Select user from questionlog where ID ='".$_SESSION['idquestion']."'");
$userId = $row = $result->fetch_assoc();
$arrainfo[0]=$arraytlist;
$arrainfo[1]= false;
if($userId['user'] == $_SESSION['username'])
    $arrainfo[1]= true;
$db->close();
echo json_encode($arrainfo);


