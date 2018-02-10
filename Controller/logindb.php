<?php  include '../Config/db_server.php';
   
    $db = new DB();
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

     $result = $db->query("Select * from user where username='".$username."' AND password= '".$password."'"); // checks if user/pw matches in the database
    $row = $result->fetch_assoc();
    $arr = array();


   // if query returns 1 value
	if($row!=null){
    $arr[] = json_encode($row['username']);
     $_SESSION['username'] = $username; // start a session
	
 	if(isset($_SESSION['username'])){
 	   echo json_encode($username); // if session is set return the username
 	  }
    }
    else{
    echo false;
    }


   

    
?>