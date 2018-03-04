<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Search Page</title>
    <style>
        #container{
            text-align: center;

            color:#fffccc;}


        }

        #Title:hover {
            color: blue;
            cursor: pointer;
        }

        .date{
            color: black;
        }

        .box12{
            position: fixed;
            border: transparent;
            width: 70%;
            padding: 1%;
            color:black;
        }

        .bla{
            margin-left: 30%
        }

        .bla2{
            margin-left:25%;
            margin-top: 2%;
            color: black;
        }
        li{
            color:black;
        }
        #tags_table{
            list-style-type:none;
            columns:2;
        }


        .modal-advanced {
            position: absolute; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

        }


        /* Modal Content */
        .modal-content-advanced {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close-advanced {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-advanced:hover,
        .close-advanced:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#search_button').click(function(){
                $("#myTable321").empty();

         
                var str="";
                $.post('../Controller/list_backend.php',{search:$('#search_box').val()},
 
                    function(data){

                    // ------------------------------------------------------------

                        var dataarray = JSON.parse(data);
                        alert(dataarray);
                        var source =
                          {
                              localdata: dataarray,
                              datatype: "array"
                          };

                          var dataAdapter = new $.jqx.dataAdapter(source);


                        $("#questions").jqxDataTable(
                          {
                              altRows: true,
                              pageable: true,
                              sortable: true,
                              source: dataAdapter,
                         
                          columns: [{ text: 'title', datafield: 'title', width: 250},{ text: 'user', datafield: 'user', width: 100 },{text: 'date', datafield: 'date', width: 250, align:'right',cellsalign:'right'},{text: 'Replies', datafield: 'number_replies', width:100 , align:'right',cellsalign:'right'}]
                        });

                        dataAdapter.dataBind();
                        $("#questions").jqxDataTable("updateBoundData");

                    // ------------------------------------------------------------

                });

            });


            $('#advanced_button').click(function(){

                checkbox();
                $('#questions').hide();
                $("#advancedModal").show();
            });

            $('#canceladvanced').click(function(){
                $("#advancedModal").hide();
            });

            
            $('#advancedsearchbutton').click(function(){
                $('#questions').show();
         
                var val = [];
                $(':checkbox:checked').each(function(i){
                    val[i] = $(this).val();
                });


                $("#advancedModal").hide();

                var str="";
                $.post('../Controller/searchCheckbox.php', { checkboxValues : JSON.stringify(val)},
                    function(data){
                        var dataarray = JSON.parse(data);

                       
                        var source =
                            {
                                localdata: dataarray,
                                datatype: "array"
                            };

                            var dataAdapter = new $.jqx.dataAdapter(source);


                        $("#questions").jqxDataTable(
                            {
                                altRows: true,
                                pageable: true,
                                sortable: true,
                                source: dataAdapter,
                             
                            columns: [{ text: 'title', datafield: 'title', width: 250},{ text: 'user', datafield: 'user', width: 100 },{text: 'date', datafield: 'date', width: 250, align:'right',cellsalign:'right'},{text: 'Replies', datafield: 'number_replies', width:100 , align:'right',cellsalign:'right'}]
                        });

                        dataAdapter.dataBind();
    $("#questions").jqxDataTable("updateBoundData");

                    });
            });


        });
        function saveIdHoster(idQuestion){
            var xhttp = new XMLHttpRequest();

            xhttp.open("POST", "../controller/ChoosenQuestion.php", true);

            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("value="+idQuestion);
            window.location.href="question.php";

        }

        // function used to retrieve all the tags in the database and put them as checkbox for a more advanced search
        function checkbox(){
            $.post("../Controller/tagsdb.php",
                function(data){
                    var tags = JSON.parse(data);
                    if(tags[0]==null){
                        alert("no tags");
                    }
                    else{
                        $('#tags_table').empty();
                        for(var i = 0; i<tags.length;i++){
                            var str = "<li><input type='checkbox' value ='"+tags[i]+"'><label>"+tags[i]+"</label> </li><br>";
                            $('#tags_table').append(str);
                        }
                    }

                })
        }

    </script>
    <?php include('header.php'); ?>


</head>

<body>

<div id="container">

<nav>
    <img src="../Img/LogoOMQ.png" alt="Logo" height="80px" width="80px"/>
    <div>
    <b>Enter Search term:
        <input id="search_box" type="text" search_box="question"><br>
        <br>
        <button id="search_button" value= "search">Search</button>
        <button id="advanced_button" value= "advanced">Advanced</button>

    </b>




    <div style="margin-top: 2%;">
        <ul id="myTable321">

        </ul>
    </div>

    <div id="questions"></div>

    <!-- popup thing-->
    <div id="advancedModal" class="modal-advanced" hidden>

        <!-- Modal content -->
        <div style="background-color: white; padding: 20px;margin-left: 20%;margin-right: 20%">
            <h2> Current tags in the database </h2>
                <ul id="tags_table"></ul>
                <button id="canceladvanced"> Cancel </button>
                <button id="advancedsearchbutton">Search</button>

        </div>


    </div>
</body>

</html>