<?php  include '../Config/db_server.php';
   session_start();
    $db = new DB();
    $username = $_POST['username'];
    $password = $_POST['password'];

     $result = $db->query("Select * from user where username='".$username."' AND password= '".$password."'"); // checks if user/pw matches in the database
    $row = $result->fetch_assoc();
    $arr = array();


   // if query returns 1 value
	if($row!=null){
    $arr[1] = $row['username'];
    $arr[0] = true;
    $_SESSION['username'] = $row['username'];


    }
    else{
        $arr[0] = false;
    }
echo json_encode($arr);

   

    
?>