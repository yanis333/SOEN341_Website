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

        $checkwhichimg =json_decode($row["clan"]);
        switch($checkwhichimg[0]){

            case "1":
                $arr[2] =1;
                switch($checkwhichimg[1]){
                    case "0": $arr[3] =0; break;
                    case "1": $arr[3] =1; break;
                    case "2": $arr[3] =2; break;
                }
                break;
            case "2":
                $arr[2] =2;
                switch($checkwhichimg[1]){
                    case "0": $arr[3] =0; break;
                    case "1": $arr[3] =1; break;
                    case "2": $arr[3] =2; break;
                }
                break;
            case "3":
                $arr[2] =3;
                switch($checkwhichimg[1]){
                    case "0": $arr[3] =0; break;
                    case "1": $arr[3] =1; break;
                    case "2": $arr[3] =2; break;
                }
                break;
            case "4":
                $arr[2] =4;
                switch($checkwhichimg[1]){
                    case "0": $arr[3] =0; break;
                    case "1": $arr[3] =1; break;
                    case "2": $arr[3] =2; break;
                }
                break;

        }


    }
    else{
        $arr[0] = false;
    }
echo json_encode($arr);

   

    
?>