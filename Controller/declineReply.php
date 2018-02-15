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

$db->query("Delete From replylist WHERE ID='$valueIDTOadd';");

$db->close();