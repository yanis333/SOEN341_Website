<!DOCTYPE html>
<html>
<head>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../Jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
<script type="text/javascript" src="../Jqwidgets/scripts/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxpasswordinput.js"></script>
<script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxdatatable.js"></script>
    <style>

        .headerpageright{
            display:flex;

        }


        body{
            background-color:pink;
        }


        .onglet{
            float: left;
        }

        .inputlogincss {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .elementLiA {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            margin-right:5px;
        }

        .elementLiA:hover:not(.active) {
            background-color: #111;
            height:100%;
        }


        .buttonlogincss {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .buttonlogincss:hover {
            opacity: 0.8;
        }
        .rightFloat{
            float:right;

        }


        .cancelbtnlogincss {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }


        .containerlogincss {
            padding: 16px;
        }



        .modallogincss {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            margin-left: 25%;
            width: 50%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            padding-top: 60px;
        }

        .titlelogin{
            color: black;
            float: left;
        }



        .modal-contentlogincss {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }
        .animatelogincss {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        .closelogincss:hover,
        .closelogincss:focus {
            color: red;
            cursor: pointer;
        }

        .modalheader {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }



        .modal-contentheader {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        .mainheader {

            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color:#7f345a;
            width:100%;
        }
    </style>

    <script>
        $(document).ready(function(){

         $("#register_password").jqxPasswordInput({ placeHolder: "Enter a Password", height: 25, width: 200});
            $.post('../Controller/OAuth.php',
                function(data){
                    var valueinfo =JSON.parse(data);
                    if(valueinfo[0]){
                        $('#Mainusername').html("Welcome " + valueinfo[1]);
                        $("#myBtnlogin").hide();
                        $("#register_btn").hide();
                        $("#Mainusernamelist").show();
                        $("#Mainusernamelistlogout").show();
                        $("#loginform").hide();


                    }
                });
            $('#myBtnlogin').click(function () {
                $("#loginform").show();
                $("#register_modal").hide();
                $("#didnotEnterAllLogininfo").hide();
                $("#register_modal").hide();


            });
            $('#register_btn').click(function () {
                $("#register_modal").hide();
                $("#register_modal").show();
                $("#didnotEnterAllRegisterinfo").hide();
                $("#loginform").hide();


            });
            $('#cancelbtnlogin').click(function () {
                $("#loginform").hide();
            });
            $('#cancelbtnRegister').click(function () {
                $("#register_modal").hide();
            });
            $('#Logout').click(function () {
                $.post('../Controller/OAuthLogout.php',
                    function(data){
                        $("#myBtnlogin").show();
                        $("#register_btn").show();
                        $("#Mainusernamelist").hide();
                        $("#Mainusernamelistlogout").hide();
                        $("#loginform").hide();
                        window.location.href="index.php";



                    });
            });
            $("#loginbtnfromtheform").click(function () {
                if($("#usernamelogin").val() !="" && $("#passwordlogin").val()!=""){
                    $.post('../Controller/logindb.php',{username:$("#usernamelogin").val(), password:$("#passwordlogin").val()},
                        function(data){
                            var valueinfo =JSON.parse(data);
                            if(valueinfo[0]){
                                $('#Mainusername').html("Welcome " + valueinfo[1]);
                                $("#myBtnlogin").hide();
                                $("#register_btn").hide();
                                $("#Mainusernamelist").show();
                                $("#Mainusernamelistlogout").show();
                                $("#loginform").hide();


                            }
                            else{
                                alert("Username/Password error");
                            }
                        });
                }else{
                    $("#didnotEnterAllLogininfo").show();
                }


            });

            $("#Registerbtnfromtheform").click(function () {
                if($("#register_username").val() != "" && $("#register_password").val() != "" && $("#register_password_verify").val() != "" && $("#register_email").val() != "" && ($("#register_password").val() == $("#register_password_verify").val())){
                    $.post('../Controller/RegisterBE.php',{ username:$("#register_username").val(), password:$("#register_password").val(), email:$("#register_email").val()},
                        function(data){
                            var valueinfo =JSON.parse(data);
                            if(valueinfo[0]){
                                $('#Mainusername').html("Welcome " + valueinfo[1]);
                                $("#myBtnlogin").hide();
                                $("#register_btn").hide();
                                $("#Mainusernamelist").show();
                                $("#Mainusernamelistlogout").show();
                                $("#register_modal").hide();

                            }
                            else{
                                alert("Username or email already exist");
                            }
                        });
                }
                else{
                    $("#didnotEnterAllRegisterinfo").show();
                }
            });
        });
    </script>
</head>
<body>

<nav id="header" class="headerpageright">

    <ul class="mainheader">
        <li > <img src="../Img/Logo-OMQ.png" style="cursor: pointer; float: left;" onclick="window.location.href='index.php'" alt="Logo" height="40px" width="40px"/></li>

        <li class="onglet"><a class="elementLiA" href="add.php">Add a question</a></li>
        <li class="onglet"><a class="elementLiA" href="LIST.php">Search a question</a></li>
        <li hidden><a class="elementLiA" href="#">Profile</a></li>
        <li  class="rightFloat">
            <a class="elementLiA" href="#" id="register_btn"> Register</a></li>
        <li id="loginsection" class="rightFloat">
            <a class="elementLiA" href="#" id="myBtnlogin">Login</a>
        </li>
        <div id="register_modal" class="modallogincss">


                <div class="containerlogincss">
                    <h4 id="didnotEnterAllRegisterinfo" style="color: red;" hidden>Enter information in all field</h4>
                    <label class="titlelogin" ><b>Username</b></label>
                    <input id="register_username" class="inputlogincss" type="text" placeholder="Username">

                    <label class="titlelogin" ><b>Password</b></label>
                   
 <input id="register_password" class="inputlogincss" type="password"> 
                    <label class="titlelogin" ><b>Confirm Password</b></label>
                    <input id="register_password_verify" class="inputlogincss" type="password" placeholder="Confirm Password">
                    <label class="titlelogin" ><b>Email</b></label>
                    <input id="register_email" class="inputlogincss" type="password" placeholder="Email">

                    <button id="Registerbtnfromtheform" class="buttonlogincss">Register</button>
                </div>

                <div class="containerlogincss" style="background-color:#f1f1f1">
                    <button id="cancelbtnRegister" class="cancelbtnlogincss">Cancel</button>
                </div>
            </form>
        </div>
        <div id="loginform" class="modallogincss">

            <form class="modal-contentlogincss animatelogincss" >

                <div class="containerlogincss">
                    <h4 id="didnotEnterAllLogininfo" style="color: red;" hidden>Enter information in all field</h4>
                    <label class="titlelogin" ><b>Username</b></label>
                    <input id="usernamelogin" class="inputlogincss" type="text" placeholder="Enter Username"  >

                    <label class="titlelogin" ><b>Password</b></label>
                    <input id="passwordlogin" class="inputlogincss" type="password" placeholder="Enter Password"  >

                    <button id="loginbtnfromtheform" class="buttonlogincss">Login</button>
                </div>

                <div class="containerlogincss" style="background-color:#f1f1f1">
                    <button id="cancelbtnlogin" class="cancelbtnlogincss">Cancel</button>
                    <span >Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
        <li  class="rightFloat" id="Mainusernamelistlogout" hidden>
            <a class="elementLiA" href="#" id="Logout" > Logout</a></li>
        <li  class="rightFloat" id="Mainusernamelist" hidden>
            <a class="elementLiA" href="#" id="Mainusername" > username</a></li>
        <ul>
</nav>

</body>

</html>