<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2018-02-09
 * Time: 9:00 PM
 */

include ("../config/db_server.php");

$desc= $_POST['desc'];

$db = new DB();

$db->query("insert into replylist (description_reply,total_positive,total_negative,IDQuestion,validate,username) values('".$desc."','0','0','3','0','Alice') ");
$db->close();

?>