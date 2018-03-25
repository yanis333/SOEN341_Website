<?php
include ("../config/db_server.php");
$db = new DB();
$db->query("UPDATE replylist SET description_reply='".$_POST['desc']."' WHERE ID='".$_POST['id']."' ");