<?php
session_start();
$arrayOauth=array();
$arrayOauth[0] = false;

if(isset($_SESSION['username']))
    if($_SESSION["username"]!=null){
        $arrayOauth[0] = true;
    }
    echo json_encode($arrayOauth);