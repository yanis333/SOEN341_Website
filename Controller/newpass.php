<?php
session_start();
include("../config/db_server.php");
$mysqli = new DB();
$query = "update user set password='".$_POST['password']."' where username='".$_SESSION['username']."'";
$mysqli->query($query);
$mysqli->close();