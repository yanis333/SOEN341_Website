<!DOCTYPE html>
<html>
	<head>
		<title> List</title>
		<style>
		body{
			background-color: white;
		}
		.button {
				background-color: #ff6666;
				border:none;
				color: white;
				padding: 15px;
				text-align: center;
				display: inline-block;
				font-size: 10px;
				margin-top: 5px;
				margin-left: 50px;
				cursor: pointer;
				border-radius: 12px;
				
			}
		.button:hover{background-color:#ff0000}

		.username{
			float:right;
			margin-top:3%;
			margin-right:4%;
			margin-bottom: 1%;
		}

		.titlebox{
			width:100%;
			height: 20%;
			border: 1px solid black;
		}

		.replybox{
			width:52%;
			float:right;
			border: 1px solid black;
			display:flex;
			flex-direction: column;

		}

		.recommendbox{
			width: 44%;
			float:left;
			border: 1px solid black;	
		}


			
 		.questioncontainer{
 			display: flex;
 			flex-direction: column;
 			/*border: 3px solid gray; */
 			 border-left: 6px solid green;
 			margin: 3%;	
 			background-color: #f1f1f1;
 			border-radius: 10px;
 			font-family: Verdana;
 		}

 		#helpful{
 			border-left: 6px solid green;
 		}
 		#unhelpful{
 			border-left: 6px solid red;
 		}
 		.questioncontainer>div {
  			background-color: #f1f1f1;		
  			margin: 3%;
  			padding:2%;			
  		}


 		.questioninfocontainer{
 			display:flex;
 			flex-direction: row;
 			justify-content: space-between;
 			/*border: 1px solid blue; */
 		}
 		.questioninfocontainer>div{}
 		.userboxed{

 			flex:0 1 10%;
 			height: 10%;
 			font-size: 16px;
 			cursor: pointer;
 		}
 		.descboxed{
 			background-color: white;
 			overflow: auto;
 			margin: 5%;
 			padding: 3%;
  			flex:0 1 80%;
  			border-radius: 8px;
  			font-size: 15px;
 		}


 		.buttoncontainer{
 			display:flex;
 			flex-direction: row;
 			justify-content: flex-end;
 			/*border: 1px solid red; */
 			margin-top: 10%
 		}
 		.buttoncontainer>div{}
 		.displayupvote{
 			background-color: white;
		    border: none;
		    color: black;
		    padding: 6px 10px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 12px;
		    margin: 5px 10px;
		    border-radius: 7px;
 		}
 		.plusbutton{
 			background-color: green;
		    border: none;
		    color: white;
		    padding: 6px 30px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 12px;
		    margin: 4px 2px;
		    cursor: pointer;
		    border-radius: 7px;
 		}
 		.minusbutton{
 			background-color: red;
		    border: none;
		    color: white;
		    padding: 6px 30px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
			font-size: 12px;
		    margin: 4px 2px;
		    cursor: pointer;
		    border-radius: 7px;
 		}

		</style>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
					$.post("../controller/replyinfo.php",function(data){
						
						var info = JSON.parse(data);
						var str="";

					});
 
			});
		</script>
	</head>
	<body> 
		<nav>
			<img src="../Img/LogoOMQ.png" alt="Logo" height="80px" width="80px"/>
			<label class="username"> Username </label>
		</nav>
		<div>
			<div class="titlebox"> <p> yanis</p></div>
			<div class="replybox"> 	

				<div class="questioncontainer"  id="helpful">
					<div class="questioninfocontainer">
						<div class="userboxed" > Username1 </div>
						<div class="descboxed"> Helpful description 
						<br>
						<br> blahblahblahblahblahblah
						<br> blahblahblahblahblahblah  
						<br>
						<br> blahblahblah
						</div>
					</div>

					<div class="buttoncontainer">
						<div class="displayupvote"> 20 </div>
						<div class="pbuttonboxed"><button class="plusbutton">+</button></div>	
						<div class="mbuttonboxed"><button class= "minusbutton">-</button></div>						
					</div>
					<input type="hidden"/>
				</div>				
			

			<div class="questioncontainer" id="unhelpful">
					<div class="questioninfocontainer">
						<div class="userboxed" > Username2 </div>
						<div class="descboxed"> Unhelpful description 
						</div>
					</div>

					<div class="buttoncontainer" >
						<div class="displayupvote"> -4 </div>
						<div class="pbuttonboxed"><button class="plusbutton">+</button></div>	
						<div class="mbuttonboxed"><button class= "minusbutton">-</button></div>						
					</div>
				</div>
				<input type="hidden"/>		
			</div>

</div>

<!--				<ul id="replylist">

					<div class="boxed">

  						<div class="userboxed">
  							Username
  						</div>

  						<div class="descriptionbuttons">
	  						<div class="descriptionboxed">
	  							<p>jhvdkwdhfjkewhfkhwefjhejkfhejfhwekhfjkwhfkhwefhewjfhkwehfkwehfjkwhfjhjwhfhwefjkhwefkj</p>
	  						</div>
	  						<div class="buttons">
								<button class="plusbutton">+</button>
	  							<button class= "minusbutton">-</button>
	  						</div>
  						</div>

					</div>

					<input hidden="" type="" name="">
				</ul>
-->
			<div class ="recommendbox"> <p>.. </p></div>
		</div>
	</body>
</html>
