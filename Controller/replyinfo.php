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

$arrainfo[0]=$arraytlist;
$arrainfo[1]= false;
if($_SESSION["usernamequestion"] == $_SESSION['username'])
$arrainfo[1]= true;
echo json_encode($arrainfo);
$db->close();
