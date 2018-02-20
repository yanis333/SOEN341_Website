<?php
session_start();
include ("../config/db_server.php");


$return = array();
$return[0]=false;
if(isset($_SESSION['username']))
    if($_SESSION["username"]!=null) {
        $desc = $_POST['desc'];

        $db = new DB();

        $db->query("insert into replylist (description_reply,total_positive,total_negative,IDQuestion,validate,username) values('" . $desc . "','0','0','" . $_SESSION['idquestion'] . "','0','" . $_SESSION['username'] . "') ");
        $db->close();
        $return[0]=true;
    }
    echo json_encode($return);
?>