<?php
session_start();
include ("../Config/db_server.php");
$idquestion = $_POST['value'];

$db = new DB();

$result = $db->query("Select * from questionlog where ID ='".$idquestion."'");

$row = $result->fetch_assoc();

$db->close();
$_SESSION["idquestion"] = $idquestion;
$_SESSION["usernamequestion"] = $row['user'];


