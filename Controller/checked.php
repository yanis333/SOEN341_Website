<?php include("../config/db_server.php");

$db = new DB();

$id = $_POST['value'];
    $db ->query("UPDATE replylist SET best = 0");
    $db->query("UPDATE replylist SET best = 1 WHERE ID ='$id';");
    $db->close();
?>