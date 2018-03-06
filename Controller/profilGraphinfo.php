<?php
session_start();
include("../config/db_server.php");
$db = new DB();
$arraydata=array();
$arraydata[0]['Day']='Sept';
$arraydata[1]['Day']='Oct';
$arraydata[2]['Day']='Nov';
$arraydata[3]['Day']='Dec';
$arraydata[4]['Day']='Jan';
$arraydata[5]['Day']='Feb';
$arraydata[6]['Day']='Mar';
$arraydata[7]['Day']='Apr';
$arraydata[8]['Day']='May';
$arraydata[9]['Day']='Jun';
$arraydata[10]['Day']='Jul';
$arraydata[11]['Day']='Aug';
$arraydata[0]['month']=0;
$arraydata[1]['month']=0;
$arraydata[2]['month']=0;
$arraydata[3]['month']=0;
$arraydata[4]['month']=0;
$arraydata[5]['month']=0;
$arraydata[6]['month']=0;
$arraydata[7]['month']=0;
$arraydata[8]['month']=0;
$arraydata[9]['month']=0;
$arraydata[10]['month']=0;
$arraydata[11]['month']=0;
$arraydata[0]['reply']=0;
$arraydata[1]['reply']=0;
$arraydata[2]['reply']=0;
$arraydata[3]['reply']=0;
$arraydata[4]['reply']=0;
$arraydata[5]['reply']=0;
$arraydata[6]['reply']=0;
$arraydata[7]['reply']=0;
$arraydata[8]['reply']=0;
$arraydata[9]['reply']=0;
$arraydata[10]['reply']=0;
$arraydata[11]['reply']=0;
$result = $db->query("select * from questionlog where user='".$_SESSION['username']."'");
while($row = $result->fetch_assoc()){
    $value = explode(" ",$row['date']);
    $yanis=explode("-",$value[1]);
    switch($yanis[1]){
        case "09":
            $arraydata[0]['month']++;
            break;
        case "10":
            $arraydata[1]['month']++;
            break;
        case "11":
            $arraydata[2]['month']++;
            break;
        case "12":
            $arraydata[3]['month']++;
            break;
        case "01":
            $arraydata[4]['month']++;
            break;
        case "02":
            $arraydata[5]['month']++;
            break;
        case "03":
            $arraydata[6]['month']++;
            break;
        case "04":
            $arraydata[7]['month']++;
            break;
        case "05":
            $arraydata[8]['month']++;
            break;
        case "06":
            $arraydata[9]['month']++;
            break;
        case "07":
            $arraydata[10]['month']++;
            break;
        case "08":
            $arraydata[11]['month']++;
            break;
    }
}




$result = $db->query("SELECT * FROM questionlog WHERE ID IN(SELECT DISTINCT(IDQuestion) FROM replylist WHERE username='".$_SESSION['username']."')");
while($row = $result->fetch_assoc()){
    $value = explode(" ",$row['date']);
    $yanis= explode("-",$value[1]);
    switch($yanis[1]){
        case "09":
            $arraydata[0]['reply']++;
            break;
        case "10":
            $arraydata[1]['reply']++;
            break;
        case "11":
            $arraydata[2]['reply']++;
            break;
        case "12":
            $arraydata[3]['reply']++;
            break;
        case "01":
            $arraydata[4]['reply']++;
            break;
        case "02":
            $arraydata[5]['reply']++;
            break;
        case "03":
            $arraydata[6]['reply']++;
            break;
        case "04":
            $arraydata[7]['reply']++;
            break;
        case "05":
            $arraydata[8]['reply']++;
            break;
        case "06":
            $arraydata[9]['reply']++;
            break;
        case "07":
            $arraydata[10]['reply']++;
            break;
        case "08":
            $arraydata[11]['reply']++;
            break;
    }
}
$db->close();
$arraydata[12]= (string)("Statistics of ".(date("Y")-1)." To ".(date("Y")));
echo json_encode($arraydata);
