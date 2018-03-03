<?php 

include ("../config/db_server.php");

$db = new DB();
        $db->query("UPDATE total_questions SET total = (SELECT COUNT(*)from questionlog)");
        $result = $db->query("select * from total_questions");
        $row = $result->fetch_assoc();
        echo json_encode($row);


?>