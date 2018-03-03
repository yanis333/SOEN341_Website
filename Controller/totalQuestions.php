<?php 

include ("../config/db_server.php");

$db = new DB();

        $result = $db->query("select * from total_questions");
        $row = $result->fetch_assoc();
        echo json_encode($row);


?>