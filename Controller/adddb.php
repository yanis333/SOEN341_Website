<?php include("../config/db_server.php");

session_start();
$db = new DB();

// receive data from ajax and insert into db
$valuearr=array();
$valuearr[0]=false;
if(isset($_SESSION['username']))
if ($_SESSION['username']!=null) {
    $questiontitle = $_POST['questiontitledb'];
    $description = $_POST['descriptiondb'];
    $tags = $_POST['tagsdb'];
    date_default_timezone_set('America/Montreal');
    $date = (string)date('H:i:s d-m-Y');

    $db->query("INSERT INTO questionlog (title,description,date,user, tags) VALUES('" . $questiontitle . "','" . $description . "','" . $date . "','".$_SESSION['username']."','". $tags ."')");

    $db->close();
    $valuearr[0]=true;
}
echo json_encode($valuearr);
?>