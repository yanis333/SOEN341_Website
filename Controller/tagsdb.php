<?php include("../config/db_server.php");

	$db = new DB();


	$tagColumn = $db->query("select * from questionlog");
	$tagArray = array();
	while($row = $tagColumn->fetch_assoc()){
	    $arrayData= explode(" ",$row['tags']);
	    foreach($arrayData as $value){
	        for($i=0; $i<(count($tagArray)+1);$i++){
	            if(in_array($value,$tagArray)){

	            }
	            else{
	                $tagArray[] = $value;
	            }
	        }
	    }

	}

	echo json_encode($tagArray);


?>