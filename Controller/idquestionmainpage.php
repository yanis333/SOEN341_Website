<?php
session_start();
$idquestion = $_POST['value'];
$_SESSION['idquestion'] = $idquestion+1;

?>