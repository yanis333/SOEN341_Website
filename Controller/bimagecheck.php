<?php
session_start();
$value_background = array();

if($_SESSION['img']!=null)
    $value_background[0] =$_SESSION['img'];
else
    $value_background[0] = "0";

echo json_encode($value_background);