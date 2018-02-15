<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Search Page</title>
<style> 
		body {
    background-color:pink;
    text-align: center;

    color:#fffccc;}

    #Title:hover { 
        color: blue;
    cursor: pointer;
}

.date{
  color:#fffccc;
}

.Results{
  margin-top:"+(5*(i+1))%";
  margin-bottom: 10%;
  list-style: none ;


}
.box12{
  position: fixed;
  border: transparent;
  width: 70%; 
  padding: 1%;
}

.bla{
  margin-left: 30%
}

.bla2{
  margin-left:25%;
  margin-top: 2%;
}
    /*font-size: 140%;
        margin: 30%;
    padding: 50%;*/


    /*.div{
      position: fixed;
      border: transparent;
      width: 70%; 
      padding: 1%;

	</style>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
    $('#search_button').click(function(){
      $("#myTable321").empty();
    	
  //this sends the searched value into the backend called searchDB.php

  var str="";
          $.post('../Controller/list_backend.php',{search:$('#search_box').val()},
            function(data){
              var info = JSON.parse(data);
              if(info[0]==null)
                  alert("Sorry, there are no results for your search. Try using keywords!");
              else {
                  for (var i = 0; i<info.length; i++){
                     

                     str+="<li style ='margin-top:"+(5*(i+1))+"%; margin-bottom: 10%; list-style: none ;'><div class='box12'><label class='bla'>Search Results: </label><label id=\"Title\"onclick=\"saveIdHoster("+info[i]["ID"]+")\"</label>"+info[i]["title"]+"<label class='bla2'></label><label class=\"date\"> Date: "+ info[i]["date"]+"</label><br> </div></li><br>";

                  }
                  $("#myTable321").append(str);


              }
                    
            });    
                
}); 
    });
  function saveIdHoster(idQuestion){
    alert(idQuestion);
  }
</script>
<?php include('header.php'); ?>
</head>

<body>



		<nav>
			<img src="../Img/LogoOMQ.png" alt="Logo" height="80px" width="80px"/>
<b>Enter Search term: </br>
<input id="search_box" type="text" search_box="question"><br>
<br>
<button id="search_button" value= "search">search</button>
</b>


<div style="margin-top: 2%;">
    <ul id="myTable321">
    
</ul>
</div>
</body>

</html>