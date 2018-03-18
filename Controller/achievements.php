<?php include("../config/db_server.php");

session_start();
$db = new DB();

$result = $db->query("select * from user WHERE username = '".$_SESSION['username']."'");
$achievementsArr = array();
while($row = $result->fetch_assoc()){


$achievementsArr = explode("!", $row['achievements']);

}

echo json_encode($achievementsArr);


?>

