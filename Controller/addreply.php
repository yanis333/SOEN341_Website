<?php
session_start();
include ("../config/db_server.php");

$desc= $_POST['desc'];

$db = new DB();

$db->query("insert into replylist (description_reply,total_positive,total_negative,IDQuestion,validate,username) values('".$desc."','0','0','".$_SESSION['idquestion']."','0','".$_SESSION['username']."') ");
$db->close();

?>