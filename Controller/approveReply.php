<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2018-02-11
 * Time: 8:53 PM
 */
include ("../config/db_server.php");

$valueIDTOadd = $_POST['value'];
$db= new DB();

$db->query("UPDATE replylist SET validate='1'  WHERE ID='$valueIDTOadd';");

$db->close();

