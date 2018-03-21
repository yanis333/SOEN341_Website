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
	<script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxvalidator.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxchart.core.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxdraw.js"></script>
    <style>

    body{
            background: url("../Img/orange2.png")  no-repeat;

           background-attachment: fixed;
        }

        #loginform{
            z-index: 1;
        }

        #register_modal{
            z-index: 1;
        }
		#loginomq{
			margin-left:125px;
			font-size: 30px;
			font-family: Verdana;
		}
		
		#registeromq{
			margin-left:115px;
			font-size: 30px;
			font-family: Verdana;
		}

		#forgotpass{
			margin-left: 22px;
		}
		
		#logindiv{
			margin-left: 20px;
		}
		
		#cancelbtnlogin{
			margin-top: 0px;
			margin-left:320px;
		    background-color: Transparent;
			background-repeat:no-repeat;
			border: none;
			cursor:pointer;
			overflow: hidden;
			outline:none;
		}
		#cancelreport{
			margin-top: 0px;
			margin-left:320px;
		    background-color: Transparent;
			background-repeat:no-repeat;
			border: none;
			cursor:pointer;
			overflow: hidden;
			outline:none;
		}
		
		#cancelbtnRegister
		{
			margin-top: 0px;
			margin-left:320px;
		    background-color: Transparent;
			background-repeat:no-repeat;
			border: none;
			cursor:pointer;
			overflow: hidden;
			outline:none;
		}

		#didnotEnterAllLogininfo{
			font-size: 13px;
			margin-left: 90px;
			margin-top: 10px;
		}
		
		#didnotEnterAllRegisterinfo{
			font-size: 13px;
			margin-left: 105px;
			margin-top: 10px;
		}
	
	
		.registertextboxes{
			margin-left: 20px;
		}
    .downarrow {
        border: solid white;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 3px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
    }
		
		#logincss{
			margin-left: 150px !important;
			outline: none !important;
		    border-radius: 20px !important;
			padding: 10px !important;
			border: 2px solid #999 !important;
			width: 350px ;
			height: 310px;


		}
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }
		
		#registerform
		{
			margin-left: 150px !important;
			outline: none !important;
		    border-radius: 20px !important;
			padding: 10px !important;
			border: 2px solid #999 !important;
			width: 350px ;
			height: 390px;

            /* background:rgba(205,92,92,1); */

		}
		
		#loginbtnfromtheform{
			outline: none;
			margin-left: 0px;
			border-radius: 20px ;
			 width: 300px;
			 height: 40px;

		}
		
		#Registerbtnfromtheform{
			outline: none;
			margin-left: 20px;
			border-radius: 20px ;
			 width: 300px;
			 height: 40px;
		}
	
	
        .headerpageright{
            display:flex;
		
        }


        body{
            background-color: #FFC2B4;
        }


        .onglet{
            float: left;
        }

        .inputlogincss{
			outline: none !important;
		    border-radius: 20px !important;
			padding: 10px !important;
			border: 2px solid #999 !important;
			width: 274px ;
            margin: 8px 0 !important;
        }

        .elementLiA {
            display: block;
            color: white;
            text-align: center;
             text-decoration: none;
            
          
            padding:10px ;
            margin: 12px;

             font-family:Trebuchet MS;
            font-size:15px;
            opacity: 1;

        }
        .elementLiA:hover:not(.active) {
            color:#FBA895;
            opacity: 1;
            transition-duration: 0.2s;
        }

       /* .elementLiA:hover:not(.active) {
            background-color: #111;
            height:100%;
        }
        */


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
 
			height: 300px;
			width: 300px;
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
             padding-top: 5%;
			 padding-left: 3%;
        }
		.modalreportcss {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            margin-left: 25%;
            width: 50%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
             padding-top: 5%;
			 padding-left: 3%;
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
		.modal-contentreportcss {
			font-family: Verdana;
			text-align:center;
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 5% from the bottom and centered */
            border: 1px solid #888;
            width: 40%; /* Could be more or less, depending on screen size */
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
            
            background-color:#7B200D;
            width:100%;

            position: fixed;
            left: 0;
            top: 0;
            opacity: 0.7;
            Z-index: 1;;

        }

        #myBtnlogin, #register_btn{

            background-color:transparent;
            -moz-border-radius:28px;
            -webkit-border-radius:28px;
            border-radius:28px;
            border:1px solid white;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family:Trebuchet MS;
            font-size:15px;
    

            padding:7px 20px;
            margin-right: 10px;
            text-decoration:none;
        }
        
        #myBtnlogin:hover, #register_btn:hover, .homeicon:hover {
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #d6500d), color-stop(1, #fcb851));
                background:-moz-linear-gradient(top, #d6500d 5%, #fcb851 100%);
                background:-webkit-linear-gradient(top, #d6500d 5%, #fcb851 100%);
                background:-o-linear-gradient(top, #d6500d 5%, #fcb851 100%);
                background:-ms-linear-gradient(top, #d6500d 5%, #fcb851 100%);
                background:linear-gradient(to bottom, #d6500d 5%, #fcb851 100%);
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d6500d', endColorstr='#fcb851',GradientType=0);
                background-color:#d6500d;
}
        #myBtnlogin:active, #register_btn:active{
            position:relative;
    top:1px;
}

.homeicon{
    cursor: pointer; 
    float: left; 
    padding-left: 18px; 
    padding-top: 15px; 
    padding-right: 18px;
    padding-bottom: 17px;
    transition-duration: 0.2s;

}



    </style>

    <script>


        $(document).ready(function(){
			$('#registerform').jqxValidator({ rules: [
                { input: '#register_username', message: 'Minimum 5 characters', action: 'keyup', rule: 'minLength=5' },
                { input: '#register_email', message: 'Invalid e-mail!', action: 'keyup', rule: 'email'}], theme: 'summer'
			});
			$("#passwordlogin").jqxPasswordInput({ placeHolder: "Enter a Password", height: 40, width: 300});
			$("#register_password").jqxPasswordInput({ placeHolder: "Enter a Password", height: 40, width: 300});
			$("#register_password_verify").jqxPasswordInput({ placeHolder: "Enter a Password", height: 40, width: 300});
            $.post('../Controller/OAuth.php',
                function(data){
                    var valueinfo =JSON.parse(data);
                    if(valueinfo[0]){
                        $('#Mainusername').html("Welcome " + valueinfo[1]+"   <i class=\"downarrow\"></i>");
                        $("#myBtnlogin").hide();
                        $("#register_btn").hide();
                        $("#Mainusernamelist").show();
                        $("#Mainusernamelistlogout").show();
						$("#reportfunction").show();
                        $("#loginform").hide();
						$("#reportform").hide();


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
				$("#reportform").hide();


            });
            $('#cancelbtnlogin').click(function () {
                $("#loginform").hide();
			
            });
			 $('#cancelreport').click(function () {
              $("#reportform").hide();
			
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
						$("#reportfunction").hide();
                        $("#loginform").hide();
						$("#reportform").hide();
                        window.location.href="index.php";



                    });
            });
			$('#reportbtn').click(function () {
				$("#reportform").show();
				
			
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
								$("#reportfunction").show();
                                $("#loginform").hide();
								$("#reportform").hide();


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
									$("#reportfunction").show();
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
		
			$("#reportbtnfromtheform").click(function () {
                if($("#reportusername").val() != "" ){
					$.post('../Controller/reportuser.php',{user:$("#reportusername").val() },
                        function(data){
                            var valueinfo =JSON.parse(data);
                            if(valueinfo[0]){
                                alert("User reported Succesfully");

                            }
                            else{
                                alert("This user dosen't exist so we can't report it ,you know!");
                            }
                        });
				
				}
            });
		
        });
    </script>
</head>
<body>

<nav id="header" class="headerpageright" style="margin-bottom: 70px;">

    <ul class="mainheader" id="mainheaderheader">
        <li > <img src="../Img/home2.png" class="homeicon" onclick="window.location.href='index.php'" alt="Logo" height="30px" width="30px"/></li>

        <li class="onglet"><a class="elementLiA" href="add.php">Ask a question</a></li>
        <li class="onglet"><a class="elementLiA" href="LIST.php">Search a question</a></li>
        <li hidden><a class="elementLiA" href="#">Profile</a></li>		
        <li  class="rightFloat">
            <a class="elementLiA" href="#" id="register_btn"> Register</a></li>
        <li id="loginsection" class="rightFloat">
            <a class="elementLiA buttonLogin" href="#" id="myBtnlogin">Login</a>
        </li>
        <div id="register_modal" class="modallogincss">

				<form id="registerform" class="modal-contentlogincss animatelogincss" >
                <div class="containerlogincss">
					<button id="cancelbtnRegister" class="cancelbtnlogincss">X</button>
					<label id="registeromq">Register</label>
                    <h4 id="didnotEnterAllRegisterinfo" style="color: red;" hidden>Please fill in required fields</h4>
				 <div class="registertextboxes">
                    <input id="register_username" class="inputlogincss" type="text" placeholder="Username">
					<input id="register_password" class="inputlogincss" type="password"> 
                    <input id="register_password_verify" class="inputlogincss" type="password" placeholder="Confirm Password">
                    <input id="register_email" class="inputlogincss" type="text" placeholder="Email">
				 </div>
					
                    <button id="Registerbtnfromtheform" class="buttonlogincss">Register</button>
                </div>




            </form>
        </div>
        <div id="loginform" class="modallogincss">

            <form  id="logincss" class="modal-contentlogincss animatelogincss" >
			                     <button id="cancelbtnlogin" class="cancelbtnlogincss">X</button>
								 					<label id="loginomq">Login</label>
                <div >
					<h4 id="didnotEnterAllLogininfo" style="color: red;" hidden>Enter information in all field</h4>
					<div id="logindiv">
					<input id="usernamelogin" class="inputlogincss" type="text" placeholder="Username"  >
                    <input id="passwordlogin" class="inputlogincss" type="password" placeholder="Password"  >
					<button id="loginbtnfromtheform" class="buttonlogincss">Login</button>
					</div>
                </div>
					<span id="forgotpass">Forgot <a href="#">password?</a></span>

            </form>
        </div>
		<div id="reportform" class="modalreportcss">

            <form  id="logincss" class="modal-contentreportcss animatelogincss" >
			                     <button id="cancelreport" class="cancelbtnlogincss">X</button>
								 					<h3 id="reportomq">Report User</h3>
                <div >
					<div id="reportdiv">
					<input id="reportusername" class="inputlogincss" type="text" placeholder="Username"  >
					<button id="reportbtnfromtheform" class="buttonlogincss">Report user</button>
					</div>
                </div>

            </form>
        </div>
		
        <li  class="rightFloat" id="Mainusernamelistlogout" hidden>
            <a class="elementLiA" href="#" id="Logout" > Logout</a></li>
			
		<li  class="rightFloat" id="reportfunction" hidden>
            <a class="elementLiA" href="#" id="reportbtn" > Report User</a></li>
			
        <li  class="rightFloat" id="Mainusernamelist" hidden>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>

            <a class="elementLiA " href="profil.php" id="Mainusername" > username </a>
            </li>
        <ul>
</nav>
<div class= "body1"></div>

</body>

</html>