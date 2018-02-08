<?php


class DB{


    private $db;

    public function __construct()
    {
        $servername = "localhost";
        $username = "jiradev";
        $password = "jiradev123";
        $database = "SOEN_341";
        $this->db = mysqli_connect($servername,$username,$password,$database);
        
    }

    public function query($txt){
       return $this->db->query($txt);
    }

    public function close(){
        $this->db->close();
    }



}

?>