<?php
include '../config/db_server.php';
session_start();
$db = new DB();

$userfromFrontEnd = $_POST['user'];

$result = $db->query("SELECT * FROM user WHERE username='".$userfromFrontEnd."'");
$row = $result->fetch_assoc();
$arrvalue=array();
if($row!=null){
    $arrvalue[0] =true;
    $row['report']++;
    $result = $db->query("Update user set report='".$row['report']."'WHERE username='".$userfromFrontEnd."'");
    if($row['report']==15){
        $result = $db->query("Delete from user where  username='".$userfromFrontEnd."'");
    }
}
else{
    $arrvalue[0] =false;
}
echo json_encode($arrvalue);
$db->close();
?>