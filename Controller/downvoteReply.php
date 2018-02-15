<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2018-02-11
 * Time: 8:54 PM
 */
include ("../config/db_server.php");

$valueIDTOadd = $_POST['value'];
$db= new DB();

$result= $db->query("select * from replylist where ID ='$valueIDTOadd'");

$row = $result->fetch_assoc();
$valueofTotalpositif = $row['total_positive'] -1;
$db->query("UPDATE replylist SET total_positive='$valueofTotalpositif' WHERE ID='$valueIDTOadd'");

$db->close();