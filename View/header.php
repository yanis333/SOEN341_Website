<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
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
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color:#7f345a;
    width:100%; 
}
.button:hover{background-color:#ff0000}
</style>
	
<script> 
        // when windows loads, gets information about the modal.
    window.onload = function(){
		
		
		var modalr = document.getElementById('register_modal');

        // Get the button that opens the modal
        var btnr = document.getElementById("register_btn");

        // Get the <span> element that closes the modal
        var spanr	 = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
		
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[1];

        // When the user clicks on the button, open the modal 
		 btnr.onclick = function() {
            modalr.style.display = "block";
        }
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
		spanr.onclick = function() {
             modalr.style.display = "none";
        }
		
        span.onclick = function() {
             modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                 modal.style.display = "none";
            }
			else if (event.target==modalr)
				modalr.style.display = "none";
        } 
    };

	
	
	
    // when the login button is clicked
    $(document).ready(function(){
        $('.welcome').hide();
        $('#login').submit(function(){
            var modal = document.getElementById('myModal'); // get the modal to close it
    
            // get username and password value
            var username = $('#username').val();
            var password = $('#password').replaceWith($('#password').clone().attr('type', 'text')).val();

            // send those values to the logindb.php file
            $.post('../Controller/logindb.php',{username:username, password:password},
            function(data){
                    
                // start a session and display the welcome message if everything goes well
            if(data){
                <?php session_start(); ?>
                 var name =JSON.parse(data);
                $('#loginsection').hide(); // hide the login/register button
                $('#hello').html("Welcome " + name); // query went well 
                modal.style.display = "none";
                $('.welcome').show();      // show the welcome div
            }

            // otherwise alert something went wrong
            else{
                alert("Username/Password error");
                password=$('#password').replaceWith($('#password').clone().attr('type', 'password')).val();
            }
            });  
    });
    
    $('#register').submit(function(){
            var modal = document.getElementById('register_modal'); // get the modal to close it
    
            // get username, password, email value
            var username = $('#register_username').val();
            var password = $('#register_password').val();
			var password_verify = $('#register_password_verify').val();
			var email = $('#register_email').val();
			if(password==password_verify){
            // send those values to the RegisterBE.php file
            $.post("../controller/RegisterBE.php",{username:username, password:password, email:email}, function(data){
					if(data==true){
						alert("Account succesfully created");
						document.getElementById('register_username').value = "";
						document.getElementById('register_password').value = "";
						document.getElementById('register_email').value = "";
					}
					else{
						alert("username/email already taken");
					}
				});	
            }
            else{
                alert("password don't match");
            }
    });

        // logout button, destroys the session
        $('#logout').click(function(){
            <?php session_destroy(); ?>
            $('#loginsection').show();
            $('.welcome').hide();
            window.location.reload();
        });
    });
    </script>
</head>
<body>

<nav id="header">
        <ul>
        <!--   <li class= "inactiveLink"> 
                <li><a href="index.php">Home</a></li> -->
            <li > <a href="index.php"> <img src="../Img/LogoOMQ.png" alt="Logo" height="40px" width="40px"/></a></li> 

  <li><a href="add.php">Add a question</a></li>
  <li><a href="list.php">Search a question</a></li>
  <li hidden><a href="#">Profile</a></li>
    <div id="loginsection">
    <li class="rightFloat"><a href="#" id="register_btn"> Register</a></li>
    <li class="rightFloat"><a href="#" id="myBtn">Login</a></li>
    </div>
	<div id="register_modal" class="modal">
            <div class="modal-content">
                <span class ="close"> &times;</span>
                <div id="formSection">
                    <form id="register">
                    <input type="text" id ="register_username" required placeholder="Username" ><br><br>
                     <input type="password"  id="register_password" required placeholder ="Password"> <br><br>
					 <input type="password"  id="register_password_verify" required placeholder ="Verify Password"> <br><br>
					 <input type="text"  id="register_email" required placeholder ="Email"><br><br>
                    <button class="rightFloat"> Register </button>
                </form>
                </div>
            </div>
	</div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class ="close"> &times;</span>
                <div id="formSection">
                    <form id="login">
                    <input type="text" id ="username" required placeholder="Username" ><br><br>
                     <input type="password"  id="password" required placeholder ="Password"><br><br>
                    <button class="rightFloat"> Login </button>
                </form>
                </div>
            </div>
        </div>
    <div class="welcome">
        <li class= "rightFloat">
        <a href="#" id = "logout"> logout </a>
        </li>

        <li class= "rightFloat inactiveLink">
            <a href="#" id="hello"></a>
        </li>
    </div>
    <ul>
    </nav>

    </body>

    </html>