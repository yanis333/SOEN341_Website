<!DOCTYPE html>
<html>

<head>

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
        .modallogincss {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            margin-left: 28%;
            width: 50%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            padding-top: 65px;
        }
        #mainSubject2{
            cursor: pointer;
        }
        #Registerbtnfromtheform{
            outline: none;
            margin-left: 20px;
            border-radius: 20px ;
            width: 300px;
            height: 35px;
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
        .buttonlogincss {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .buttonlogincss:hover {
            opacity: 0.8;
        }

        #didnotEnterAllRegisterinfo{
            font-size: 13px;
            margin-left: 105px;
            margin-top: 10px;
        }
        #registeromq{
            margin-left:115px;
            font-size: 30px;
            font-family: Verdana;
        }
        .inputlogincss{
            outline: none !important;
            border-radius: 20px !important;
            padding: 10px !important;
            border: 2px solid #999 !important;
            width: 274px ;
            margin: 8px 0 !important;
        }
        #register_modal{
             z-index: 1;
         }

        .registertextboxes{
            margin-left: 20px;
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
        .one_piece{
            width: 49%;
            float: left;
            text-align: center
        }
        .uchiha{
            width: 49%;
            float: left;
            text-align: center
        }
        .dragonball{
            width: 49%;
            float: left;
            text-align: center;
            margin-top: 2%;
        }
        .bleach{
            width: 49%;
            float: left;
            text-align: center;
            margin-top: 2%;
        }
        .bodypartclass{
            background: url("../Img/orange2.png") no-repeat;
            background-size: 100% 100%;
        }
        #onpieceI{
            cursor: pointer;
        }#uchihaI{
            cursor: pointer;
        }#dragonballI{
            cursor: pointer;
        }#bleachI{
            cursor: pointer;
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
    </style>

    <script>
        $(document).ready(function(){
            var lock=true;
            $("#mainSubject2").click(function(){
                window.location.href="index.php";
            });
            $.post('../Controller/gohomepage.php',
                function(data){
                    var valuearr = JSON.parse(data);
                    if(valuearr[0]){

                        $("#mainSubject").hide();
                        $("#mainSubject2").show();

                        setInterval(function(){

                            if(lock){
                                $("#mainSubject2").css("color", "green");
                                lock=false;
                            }
                            else{
                                $("#mainSubject2").css("color", "blue");
                                lock=true;
                            }
                        },500);
                    }

                });
            $("#onpieceI").mouseover(function(){
                $('#bodypart').css('backgroundImage', 'url(../Img/onepiece0.jpg)');
                $("#test1").trigger('pause');
                $("#test2").trigger('pause');
                $("#test3").trigger('pause');
                $("#test").trigger('play');
            });
            $("#onpieceI").mouseout(function(){
                $("#test").trigger('load');
            });
            $("#uchihaI").mouseover(function(){
                $('#bodypart').css('backgroundImage', 'url(../Img/uchiha0.jpg)');
                $("#test").trigger('pause');
                $("#test2").trigger('pause');
                $("#test3").trigger('pause');
                $("#test1").trigger('play');
            });
            $("#uchihaI").mouseout(function(){
                $("#test1").trigger('load');
            });
            $("#dragonballI").mouseover(function(){
                $('#bodypart').css('backgroundImage', 'url(../Img/db0.jpg)');
                $("#test").trigger('pause');
                $("#test1").trigger('pause');
                $("#test3").trigger('pause');
                $("#test2").trigger('play');
            });
            $("#dragonballI").mouseout(function(){
                $("#test2").trigger('load');
            });
            $("#bleachI").mouseover(function(){
                $('#bodypart').css('backgroundImage', 'url(../Img/bleach0.jpg)');
                $("#test").trigger('pause');
                $("#test1").trigger('pause');
                $("#test2").trigger('pause');
                $("#test3").trigger('play');
            });
            $("#bleachI").mouseout(function(){
                $("#test3").trigger('load');

            });


        $("#onepicediv").click(function(){
            $("#register_modal").show();
            $("#register_img").val("One Piece Clan");
        });
        $("#uchihadiv").click(function(){
            $("#register_modal").show();
            $("#register_img").val("Uchiha Clan");
        });
        $("#dragonballdiv").click(function(){
            $("#register_modal").show();
            $("#register_img").val("Dragon Ball Clan");
        });
        $("#bleachdiv").click(function(){
            $("#register_modal").show();
            $("#register_img").val("Bleach Clan");


        });
            $("#register_password").jqxPasswordInput({ placeHolder: "Enter a Password", height: 40, width: 300});
            $("#register_password_verify").jqxPasswordInput({ placeHolder: "Enter a Password", height: 40, width: 300});
        $("#text1").click(function(){
                alert("Choose your clan");
            });
        $('#registerform').jqxValidator({ rules: [
                    { input: '#register_username', message: 'Minimum 5 characters', action: 'keyup', rule: 'minLength=5' },
                    { input: '#register_email', message: 'Invalid e-mail!', action: 'keyup', rule: 'email'}], theme: 'summer'
            });
        $('#cancelbtnRegister').click(function () {
                $("#register_modal").hide();
            });
        $("#Registerbtnfromtheform").click(function () {
                if($("#register_username").val() != "" && $("#register_password").val() != "" && $("#register_password_verify").val() != "" && $("#register_email").val() != "" && ($("#register_password").val() == $("#register_password_verify").val())){
                    $.post('../Controller/RegisterBE.php',{ username:$("#register_username").val(), password:$("#register_password").val(), email:$("#register_email").val(),img:$("#register_img").val()},
                        function(){


                        });
                }
                else{
                    $("#didnotEnterAllRegisterinfo").show();
                }
            });
        });
    </script>

</head>
<body id="bodypart" class="bodypartclass">
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
                    <input id="register_img" class="inputlogincss" type="text" disabled>
                </div>

                <button id="Registerbtnfromtheform" class="buttonlogincss">Register</button>
            </div>




        </form>
    </div>

<audio id="test" >
    <source  src="../Img/one_piece_dendenmush.mp3" type="audio/mpeg">
</audio>

<audio id="test1" >
    <source  src="../Img/sharingan.mp3" type="audio/mpeg">
</audio>

<audio id="test2" >
    <source  src="../Img/dragon_ball_zzzz.mp3" type="audio/mpeg">
</audio>

<audio id="test3" >
    <source  src="../Img/bankai_shout_2.mp3" type="audio/mpeg">
</audio>
    <div id="animationpage">
<div style="text-align: center">
    <h1 style="color: white" id="mainSubject" >Welcome to the Anime World! </h1>
    <h1 id="mainSubject2" hidden>Click here to start your adventure</h1>

</div>

<div id="onepicediv" class="one_piece">
    <img id="onpieceI" src="../Img/one-pieceR.png"  alt="one_piece" height="300" width="270">
</div>
<div id="uchihadiv" class="uchiha">
    <img id="uchihaI" src="../Img/uchihaR.png"  alt="uchiha" height="300" width="270">
</div>

<div id="dragonballdiv" class="dragonball">
    <img id="dragonballI" src="../Img/Dragon_BallsR_.png" alt="dragonball" height="300" width="270">
</div>

<div id="bleachdiv" class="bleach">
    <img id="bleachI" src="../Img/bleachR.png" alt="bleach" height="300" width="270">
</div>
</div>

</body>

</html>