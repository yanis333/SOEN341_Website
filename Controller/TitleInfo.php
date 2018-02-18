<?php

session_start();
include ("../config/db_server.php");

$db= new DB();

$result= $db->query("select * from questionlog where ID ='".$_SESSION['idquestion']."'");

$row = $result->fetch_assoc();

$db->close();

echo json_encode($row);