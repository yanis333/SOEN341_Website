<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2018-02-11
 * Time: 5:49 PM
 */
include ("../config/db_server.php");
$arrainfo=array();
$arraytlist = array();
$db= new DB();

$result = $db->query("Select * from replylist");

while($row = $result->fetch_assoc()){
    $arraytlist[] = $row;
}
$db->close();
$arrainfo[0]=$arraytlist;
$arrainfo[1]= true;
echo json_encode($arrainfo);

