<?php include("../config/db_server.php");

$db = new DB();

$id = $_POST['value'];
$question = $_POST['question'];
    $db ->query("UPDATE replylist SET best = 0 WHERE IDQuestion = '$question';");
    $db->query("UPDATE replylist SET best = 1 WHERE ID ='$id';");
    $db->close();
?>