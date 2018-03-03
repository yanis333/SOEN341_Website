<?php

include("../config/db_server.php");
$mysqli = new DB();
$query = "SELECT title,user, date, number_replies FROM questionlog ORDER BY ID DESC";
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()){
	$question[] = $row;
    }
$mysqli->close();
    echo json_encode($question);
?>