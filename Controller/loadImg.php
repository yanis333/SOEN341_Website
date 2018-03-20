<?php
include '../config/db_server.php';
session_start();
$db = new DB();
$arrayOauth=array();
$result = $db->query("SELECT * FROM user WHERE username='".$_SESSION["username"]."'");
$row = $result->fetch_assoc();
$checkwhichimg =json_decode($row["clan"]);
switch($checkwhichimg[0]){

    case "1":
        $arrayOauth[2] ="../Img/one-pieceR.png";
        $arrayOauth[3] ="../Img/onepiece0.jpg";
        $arrayOauth[4] ="../Img/onepiece1.jpg";
        $arrayOauth[5] ="../Img/onepiece2.jpg";

        break;
    case "2":
        $arrayOauth[2] ="../Img/uchihaR.png";
        $arrayOauth[3] ="../Img/uchiha0.jpg";
        $arrayOauth[4] ="../Img/uchiha1.jpg";
        $arrayOauth[5] ="../Img/uchiha2.jpg";
        break;
    case "3":
        $arrayOauth[2] ="../Img/Dragon_BallsR_.png";
        $arrayOauth[3] ="../Img/db0.jpg";
        $arrayOauth[4] ="../Img/db1.jpg";
        $arrayOauth[5] ="../Img/db2.jpg";

        break;
    case "4":
        $arrayOauth[2] ="../Img/bleachR.png";
        $arrayOauth[3] ="../Img/bleach0.jpg";
        $arrayOauth[4] ="../Img/bleach1.jpg";
        $arrayOauth[5] ="../Img/bleach2.jpg";

        break;

}
echo json_encode($arrayOauth);
