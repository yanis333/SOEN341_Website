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
body{
     background-image: url("../Img/itachi1.jpg");
}
        .questionform{
            margin:13%;
            background-color: orange;
            padding: 10px;
            width: 720px;
            max-width: 720px;
            font-family: Trebuchet MS;
            text-shadow: 3px 1px 14px rgba(147, 147, 140, 1);
            border-radius: 10px;
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

        <br /><button class="submitbtn" style=""> Post your question </button><br /><br />

    </div>
</form>


</body>
</html>
  