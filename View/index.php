<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>

    <link rel="stylesheet" type="text/css" href="login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        .questionsindexphp{
            border:1px solid black;
            margin-top:2%;
            display:grid;
            flex: 1 1 80%;
        }
        .questionOptions{   display:flex;
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
            height:435px; /* somehow cant put a % */

            border:1px red;
        }


    </style>

    <script>

    </script>
</head>



<body>
<?php include('header.php'); ?>

<div id="content" class="contentindexphp">

    <div id = "center" class="centerofindexphp">

        <div id="questionOptions" class="questionOptions">

            <div id="search" >Search:<input type=text placeholder="Working on remote search" disabled></div>
            <div id="add" onclick="window.location.href='add.php'"><button >add</button></div>

        </div>
        <div id= "questions" class="questionsindexphp" >
        </div>
    </div>
</div>

</body>

</html>