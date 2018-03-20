<?php
include '../config/db_server.php';
session_start();
$valueChangeImg = $_POST['data'];
$value=0;
switch ($valueChangeImg){
    case "Left Image": $value=0; break;
    case "Middle Image": $value=1; break;
    case "Right Image": $value=2; break;
}
$db = new DB();
$result = $db->query("SELECT * FROM user WHERE username='".$_SESSION["username"]."'");
$row = $result->fetch_assoc();
$checkwhichimg =json_decode($row["clan"]);
$checkwhichimg[1]=$value;
$newvalue = json_encode($checkwhichimg);
$result = $db->query("UPDATE user SET clan='".$newvalue."' WHERE username='".$_SESSION["username"]."'");

