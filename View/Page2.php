<!DOCTYPE html>
<html>
   <head>
   <title></title>
   <style type="text/css">
    
	header
	{
    padding: 1em;
    color: white;
    background-color: #e82e2e;
    clear: left;
    text-align: center;
    }
	
	#submit
	{
		margin-left: 20px;
	}
	
	#titlelabel, #descriptionlabel, #tagslabel
   {
	   margin-left: 20px;
	   font-family: sans-serif;
	   font-size: 20px;
	   font-weight: 550;
   }
   
   #check1, #check2, #check3, #check4
   {
	   margin-left: 20px;
	   color: red;
   }
   
 #questiontitle, #tags
 {
	 height: 20px;
	 margin-left: 20px;
	 width: 670px;
 }
 
 #description
 {
	 margin-left: 20px;
	 height: 200px;
	 width: 670px;
 }

   
   
   #questiontitle:focus { border: 2px solid red; }
   #description:focus { border: 2px solid red; }
   #tags:focus { border: 2px solid red; }
   </style> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script>
    $(document).ready(function() { 

      
      var questiontitle = $("#questiontitle").val();
      var description = $("#description").val();
	  var tags = $("#tags").val();
	  var timer;
	  
	  
	   $("#submit").click(function(){
		   clearTimeout(timer);
		   
		   if($("#questiontitle").val()==""){
			  $("#check1").show();
			  $("#questiontitle").css('border-color', 'red');
			  timer = setTimeout(function() {
			     $("#questiontitle").css('border-color', '');
		      }, 2000); 
		   }
		   if($("#description").val()==""){
			  $("#check2").show(); 
			  $("#description").css('border-color', 'red');
			  timer = setTimeout(function() {
			     $("#description").css('border-color', '');
		      }, 2000); 
		   }
		   if($("#tags").val()==""){
			  $("#check3").show(); 
			  $("#tags").css('border-color', 'red');
			  timer = setTimeout(function() {
			     $("#tags").css('border-color', '');
		      }, 2000); 
		   }
		  
	   });   
	  
	 
	}); 
</script>
   </head>
<body bgcolor="#ffeaea">
<header>
   <h1>OMQ- Open Mind Questions</h1>
</header>   
  
   
  <div>
    <br /><h id="titlelabel">Title</h>
	<h hidden id="check1"><br />Title is missing.</h>
    <br/ ><input type="text"  id="questiontitle" placeholder="What's your question?" /><br />
	
    
	<br /><h id="descriptionlabel">Description</h>
	<h hidden id="check2"><br />Description is missing.</h>
	<h hidden id="check4"><br />Maximum amount of characters exceeded.</h>
    <div id="descriptiondiv" class="container">
	<textarea id="description"></textarea>
	</div>
	
    
	<br /><h id="tagslabel">Tags</h>
	<h hidden id="check3"><br />Please enter at least one tag.</h>
    <br /><input type="text" id="tags" placeholder="at least two tags such as (php java c), max 5 tags" /><br />
	
	<br /><input type="button" id="submit" value="Post Your Question" /><br /><br />

  </div>

 

</body>
</html>
  