<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">

/* 
        header
        {
            padding: 1em;
            color: white;
            background-color: #e82e2e;
            clear: left;
            text-align: center;
        }
        */

/* -------------*/

/* -------------*/

        .questionform{
            margin:13%;
            background-color: #3D3C3B;
            padding: 10px;
            width: 720px;
            max-width: 720px;
            font-family: Trebuchet MS;
     /*       text-shadow: 3px 1px 14px rgba(147, 147, 140, 1); */
            border-radius: 10px;
            color: white;
            opacity: 0.9;
        }

        #submit
        {
            margin-left: 20px;
        }

        #titlelabel, #descriptionlabel, #tagslabel
        {
            margin-left: 20px;
            font-family: Trebuchet MS;
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

/*
.submitbtn {
    -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
    -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
    box-shadow:inset 0px 1px 0px 0px #ffffff;
    background-color:#7b1f0d;
    -moz-border-radius:11px;
    -webkit-border-radius:11px;
    border-radius:9px;
    border:1px solid #d9a9d9;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Trebuchet MS;
    font-size:12px;
    padding:8px 15px;
    text-decoration:none;
    opacity: 0.7;
    margin-left: 78%;
}
.submitbtn:hover {
    background-color:#7b1f0d;
    opacity: 1;
    transition-duration: 0.1s;
}

.submitbtn:active {
    position:relative;
    top:1px;
}
*/

   .submitbtn {
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #787878), color-stop(1, #474747));
    background:-moz-linear-gradient(top, #787878 5%, #474747 100%);
    background:-webkit-linear-gradient(top, #787878 5%, #474747 100%);
    background:-o-linear-gradient(top, #787878 5%, #474747 100%);
    background:-ms-linear-gradient(top, #787878 5%, #474747 100%);
    background:linear-gradient(to bottom, #787878 5%, #474747 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#787878', endColorstr='#474747',GradientType=0);
    background-color:#787878;
    -moz-border-radius:8px;
    -webkit-border-radius:8px;
    border-radius:8px;
   border:1px solid white; 
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Trebuchet MS;

    font-size:13px;
    padding:7px 22px;
    text-decoration:none;
    text-shadow:0px 1px 6px #000000;
    opacity: 0.9;
     margin-bottom:7px; 
}
.submitbtn: hover {
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #242424), color-stop(1, #424242));
    background:-moz-linear-gradient(top, #242424 5%, #424242 100%);
    background:-webkit-linear-gradient(top, #242424 5%, #424242 100%);
    background:-o-linear-gradient(top, #242424 5%, #424242 100%);
    background:-ms-linear-gradient(top, #242424 5%, #424242 100%);
    background:linear-gradient(to bottom, #242424 5%, #424242 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#242424', endColorstr='#424242',GradientType=0);
    background-color:#242424;
}
.submitbtn:active {
    position:relative;
    top:1px;
}



        #questiontitle:focus { border: 2px solid red; }
        #description:focus { border: 2px solid red; }
        #tags:focus { border: 2px solid red; }
		
			


		
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {


            var timer;


            $("#submit").click(function(e){



                clearTimeout(timer);

                if($("#questiontitle").val()==""){
                    $("#check1").show();
                    $("#questiontitle").css('border-color', 'red');
                    timer = setTimeout(function() {
                        $("#questiontitle").css('border-color', '');
                    }, 2000);

                    e.preventDefault();
                }else{
                    $("#check1").hide();
                }
                if($("#description").val()==""){
                    $("#check2").show();
                    $("#description").css('border-color', 'red');
                    timer = setTimeout(function() {
                        $("#description").css('border-color', '');
                    }, 2000);
                    e.preventDefault();
                }else{
                    $("#check2").hide();
                }
                if($("#tags").val()==""){
                    $("#check3").show();
                    $("#tags").css('border-color', 'red');
                    timer = setTimeout(function() {
                        $("#tags").css('border-color', '');
                    }, 2000);
                    e.preventDefault();
                }else{
                    $("#check3").hide();
                }
                if(!($("#tags").val()=="")&& !($("#description").val()=="")&&!($("#questiontitle").val()=="")){

                    $.post('../Controller/adddb.php',
                        {
                            questiontitledb : $("#questiontitle").val(),
                            descriptiondb : $("#description").val(),
                            tagsdb : $("#tags").val()
                        },

                        function(data){
                                var item = JSON.parse(data);
                                if(item[0]){
                                    alert("Question added Successfully");
                                }
                                else {
                                    alert("You need to be login to create a question");
                                }


                        });
                }

            });





        });
    </script>

</head>
<body bgcolor="#ffeaea">
<?php include('header.php'); ?>

<!-- -->

<!-- -->

<form id="askquestion">

    <div class="questionform">
        <img id="img1" src="../Img/zanpakuto.png" alt="cog1" width="40" height="40" >
        <h2 hidden id="check0"><br/>Successful</h2>
        <br /><h id="titlelabel">Title</h>
        <h hidden id="check1"><br />Title is missing.</h>
        <br/ ><input type="text"  id="questiontitle" style="border-radius: 10px;" placeholder="What's your question?" /><br />


        <br /><h id="descriptionlabel">Description</h>
        <h hidden id="check2"><br />Description is missing.</h>
        <h hidden id="check4"><br />Maximum amount of characters exceeded.</h>
        <div id="descriptiondiv" class="container">
            <textarea style="border-radius: 10px;" id="description"; placeholder="Describe your question in more detail."></textarea>
        </div>


        <br /><h id="tagslabel">Tags</h>
        <h hidden id="check3"><br />Please enter at least one tag.</h>
        <br /><input type="text" id="tags" style="border-radius: 10px;" placeholder="Enter at least two tags separated by a space, max 5 tags (e.g. php java c)" /><br />

        <br /><button id="submit" class="submitbtn" style=""> Post your question </button><br /><br />

    </div>
</form>


</body>
</html>
  