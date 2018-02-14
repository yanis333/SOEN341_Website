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
    /*font-size: 140%;
        margin: 30%;
    padding: 50%;*/
}
	</style>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		
    $('#search_button').click(function(){
    	
          $.post('../Controller/list_backend.php',{search:$('#search_box').val()},
            function(data){
              var test = JSON.parse(data);
              if(test[0]==null)
                  alert("Sorry, there are no results for your search. Try using keywords!");
              else {
                  for (var i = 0; i<test.length; i++){
                     
                        $("#myTable > tbody").append("<tr><td>" + test[i]['title']+"</td></tr>");
                  }
             
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
<div id="text" type="text"> </div>

<div id="text" type="text"></div>
    <table id="myTable">
    <tbody>
        <tr><td>Search results</td></tr>
    </tbody>
</table>
</body>

</html>