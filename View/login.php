<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 
        // when windows loads, gets information about the modal.
    window.onload = function(){
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
             modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                 modal.style.display = "none";
            }
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
  
    <!-- nav bar -->
    <nav id="header">
        <ul>
            <li class= "inactiveLink"> <a href="#">Welcome to OMQ</a></li>
        <li><a href="#">Home</a></li>
  <li><a href="#">Add a question</a></li>
  <li><a href="#">Search a question</a></li>
  <li><a href="#">Profile</a></li>
    <div id="loginsection">
    <li class="rightFloat"><a href="#" id="register"> Register</a></li>
    <li class="rightFloat"><a href="#" id="myBtn">Login</a></li>
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

<div id="content">
    
    <div id = "center">

    <div id="questionOptions">
       
    <div id="search">Search:<input type=text></div>
    <div id="add"><button>add</button></div>

        </div>
<div id= "questions" >

</div>

    </div>

    </div>

</body>
</html>