<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2018-02-11
 * Time: 8:54 PM
 */
include ("../config/db_server.php");
session_start();
if(isset($_SESSION['username']))
    if($_SESSION["username"]!=null) {


        $valueIDTOadd = $_POST['value'];
        $db = new DB();
        $user = $_SESSION['username'];
        $ifuserexist = $db->query("select * from user where username='$user'");
        $row = $ifuserexist->fetch_assoc();
        $valueOfReplyList = $row['reply_list'];
        $valueOfReplyListinarray = explode(",",$row['reply_list']);

        if(!in_array($valueIDTOadd,$valueOfReplyListinarray)) {

            $result = $db->query("select * from replylist where ID ='$valueIDTOadd'");

            $row = $result->fetch_assoc();
            $valueofTotalpositif = $row['total_positive'] + 1;
            $db->query("UPDATE replylist SET total_positive='$valueofTotalpositif' WHERE ID='$valueIDTOadd'");




            if($valueOfReplyList!="")
            $valueOfReplyList.=",".$valueIDTOadd;
            else $valueOfReplyList = $valueIDTOadd;

            $db->query("update user set reply_list = '$valueOfReplyList' where username ='".$_SESSION['username']."'");

        }
        $db->close();
    }