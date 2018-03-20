<?php
include '../config/db_server.php';
session_start();
$arrayOauth=array();
$arrayOauth[0] = false;
$arrayOauth[2] =0;
if(isset($_SESSION['username']))
if($_SESSION["username"]!=null){
    $arrayOauth[0] = true;
    $arrayOauth[1] = $_SESSION["username"];
    $db = new DB();

    $result = $db->query("SELECT * FROM user WHERE username='".$_SESSION["username"]."'");
    $row = $result->fetch_assoc();
    $checkwhichimg =json_decode($row["clan"]);
        switch($checkwhichimg[0]){

            case "1":
                $arrayOauth[2] =1;
                switch($checkwhichimg[1]){
                    case "0": $arrayOauth[3] =0; break;
                    case "1": $arrayOauth[3] =1; break;
                    case "2": $arrayOauth[3] =2; break;
                }
                break;
            case "2":
                $arrayOauth[2] =2;
                switch($checkwhichimg[1]){
                    case "0": $arrayOauth[3] =0; break;
                    case "1": $arrayOauth[3] =1; break;
                    case "2": $arrayOauth[3] =2; break;
                }
                break;
            case "3":
                $arrayOauth[2] =3;
                switch($checkwhichimg[1]){
                    case "0": $arrayOauth[3] =0; break;
                    case "1": $arrayOauth[3] =1; break;
                    case "2": $arrayOauth[3] =2; break;
                }
                break;
            case "4":
                $arrayOauth[2] =4;
                switch($checkwhichimg[1]){
                    case "0": $arrayOauth[3] =0; break;
                    case "1": $arrayOauth[3] =1; break;
                    case "2": $arrayOauth[3] =2; break;
                }
                break;

        }


}

echo json_encode($arrayOauth);