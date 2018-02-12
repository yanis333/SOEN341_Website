<?php include("../config/db_server.php");

//create connection

$db = new DB();

// receive data from ajax and insert into db

$questiontitle	=	$_POST['questiontitledb'];
$description	=	$_POST['descriptiondb'];
date_default_timezone_set('America/Montreal');
$date = (string)date('H:i:s d-m-Y' );

$db->query("INSERT INTO questionlog (title,description,date,user) VALUES('".$questiontitle."','".$description."','".$date."','')");

$db->close();

?>