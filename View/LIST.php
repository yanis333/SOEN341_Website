<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Search Page</title>
<style> 
		body {
    background-color:pink;
    text-align: center;
    color:#fffccc;
    font-size: 140%;
    margin: 30%;
    padding: 50%px;
}
	</style>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
    $('#search_button').click(function(){
    	
    var search_question = $('#search_box').val();
    $('#text').text(search_question);

          //his sends the searched value into the backend called searchDB.php
          $.post('../Controller/SearchDB.php',{search:search_question},
            function(data){
                    
                // start a session and display the welcome message if everything goes well
            if(data){
              alert("something is good")
            }

            // otherwise alert something went wrong
            else{
                alert("Something is wrong");
             
            }
            });  
                
}); 
    });


</script>
</head>

<body>
		<nav>
			<img src="../Img/LogoOMQ.png" alt="Logo" height="80px" width="80px"/>
<b>Enter Search term: </br>
<input id="search_box" type="text" search_box="question"><br>
<br>
<button id="search_button" value= "search">search</button>
</b>
<div id="text" type="text"</div>
</body>

</html>
