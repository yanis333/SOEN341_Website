<?php

include("../config/db_server.php");

$db = new DB();


$checkboxValues = $_POST['checkboxValues'];
$checkbox = json_decode($checkboxValues);

$checkboxRow = $db -> query("Select * from questionlog");
$finalArray = array();
while($row = $checkboxRow->fetch_assoc()){
    $arrayData= explode(" ",$row['tags']);
    for($i=0; $i< (count($checkbox)); $i++){
        if(in_array($checkbox[$i], $arrayData)){
            $finalArray[] = $row;
            break;
        }

    }

}

echo json_encode($finalArray);

?>