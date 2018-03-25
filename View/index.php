<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>

    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="../Jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" >
     <link rel="stylesheet" href="../Jqwidgets/jqwidgets/styles/custom.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxdatatable.js"></script>

    <style>
        .questionsindexphp{
            border:1px solid black;
            margin-top:2%;
            display:grid;
            flex: 1 1 80%;
        }
        .questionOptions{   
            display:flex;
            justify-content: space-between;


        }
        .centerofindexphp{
            display:flex;
            flex-direction:column;
            border:1px black;
            flex:0 1 50%;

        }
        .contentindexphp{
            margin-top:2%;
            display:flex;
            justify-content: center;
            border:1px red;
        }

        #gridTitle{
            display:flex;
            justify-content:space-between;
        }

        .intro {
           width: 100%;
           height: 240px;
           position: absolute;
           left: 0;
            z-index: -1;
            background-color: #E2DDDC;
           opacity: 0.7;

        }
        .introh1{
            padding: 20px;
            margin-left: 20px;
            font-family: Trebuchet MS;
            color:black;
        }

        .currentquestions {
          
            color: white;
            text-decoration: underline;
            padding-top: 40%;
            padding-bottom: 10px;
            font-family: Trebuchet MS;


        }

        #numberQuestions{
            color:white;
                height:50px;
            font-family: Trebuchet MS;
            padding-top: 280%;

        }
        .bottomplaceholder{
            width: 100%;
            left: 0;
            position: absolute;
            background-color: black;
            margin-top: 80%;
            height: 100px;
             font-family: Trebuchet MS;
             color: white;
             opacity: 0.7;
            }


        .addbtn1 {
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
        #questions{
            opacity: 0.8;
        }
        .addbtn1:hover {
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #242424), color-stop(1, #424242));
            background:-moz-linear-gradient(top, #242424 5%, #424242 100%);
            background:-webkit-linear-gradient(top, #242424 5%, #424242 100%);
            background:-o-linear-gradient(top, #242424 5%, #424242 100%);
            background:-ms-linear-gradient(top, #242424 5%, #424242 100%);
            background:linear-gradient(to bottom, #242424 5%, #424242 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#242424', endColorstr='#424242',GradientType=0);
            background-color:#242424;
        }
        .addbtn1:active {
            position:relative;
            top:1px;
        }


    </style>

</head>



<body>
<?php include('header.php'); ?>

<script type="text/javascript">
    $(document).ready(function () {

        $.post('../Controller/totalQuestions.php',function(data){
            var info = JSON.parse(data);
            $('#numberQuestions').text(info['total'] + " Questions");
        });

        $("#questions").on('rowClick',function(event){
        $.post('../Controller/idquestionmainpage.php',{value:event.args.row.ID},
                    function(data){
                        window.location.href="question.php";

                    });
        });
        $.post("../Controller/data.php",
            function(data){
                var dataarray = JSON.parse(data);

                var source =
                    {
                        localdata: dataarray,
                        datatype: "array"
                    };
                $("#questions").jqxDataTable(
                    {
                        altRows: true,
                        pageable: true,
                        sortable: true,
                        source:source,
                        theme: 'custom',
                     
                    columns: [
                       // {text:'id',datafield:'ID',width:100},
                        { text: 'title', datafield: 'title', width: 250},
                        { text: 'user', datafield: 'user', width: 100 }
                        ,{text: 'date', datafield: 'date', width: 250, align:'right',cellsalign:'right'}
                        ,{text: 'Replies', datafield: 'number_replies', width:100 , align:'right',cellsalign:'right'}]
                });
            });
    });

    
</script>



<div id="content" class="contentindexphp">

    <div id = "center" class="centerofindexphp">

        <div id="questionOptions" class="questionOptions">

          
        </div>

        <div>
            <div id="gridTitle">
                <div class="intro">
                    <h3 class="introh1"> This is a question and answer site
                    <br> for enthuastic anime lovers ! 
                    <p> Join us; it only takes a minute: </h3>
                </div> 

                <div class="currentquestions">
                    <h1 class="currentquestionsh1"> Current Trending Questions </h1>  
                </div>
        <div> <h2 id="numberQuestions"></h2></div>
        </div>

<!--        
        <div id="add" class="addbtn1" onclick="window.location.href='add.php'"><button >Add a question</button></div><br>
        </div>
-->
               <div id="add" class="addbtn1"><a href='add.php' style="text-decoration: none; color: white;">Add a question</a></div><br>

        </div>

        <div id= "questions" style="margin-bottom: 80px;">
        </div>
      <!--   <div class="bottomplaceholder"> For scrolling </div>
    </div>
    -->
</div>

</body>

</html>