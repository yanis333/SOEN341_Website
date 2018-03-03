<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>

    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="../Jqwidjets/jqwidgets/styles/jqx.base.css" type="text/css" >
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
        $.post('../Controller/idquestionmainpage.php',{value:event.args.row.uid},
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
                     
                    columns: [{ text: 'title', datafield: 'title', width: 250},{ text: 'user', datafield: 'user', width: 100 },{text: 'date', datafield: 'date', width: 250, align:'right',cellsalign:'right'},{text: 'Replies', datafield: 'number_replies', width:100 , align:'right',cellsalign:'right'}]
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
                <div>
        <h1> Current Trending Questions </h1>  
</div><div> <h2 id="numberQuestions"></h2></div>
</div>
        <div id="add" onclick="window.location.href='add.php'"><button >Add a question</button></div><br>

        </div>
        <div id= "questions" >
        </div>
    </div>
</div>

</body>

</html>