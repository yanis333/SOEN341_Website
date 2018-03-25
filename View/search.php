<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Jqwidgets/jqwidgets/styles/custom.css" type="text/css">
    <meta charset="UTF-8">
    <title>Search Page</title>
    <style>
        #container{
            text-align: center;

            color:#fffccc;}


        }

        li{
            color:black;
        }
        
        #tags_table{
            list-style-type:none;
            font-family: trebuchet MS;
            font-size: large;
            padding-right: 0px;    
            columns:3;
            margin-right: 10px;
    padding: 5px;
    margin-left: 20px;
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
        .advanced_buttons{
            kground:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #424242), color-stop(1, #242424));
    background:-moz-linear-gradient(top, #424242 5%, #242424 100%);
    background:-webkit-linear-gradient(top, #424242 5%, #242424 100%);
    background:-o-linear-gradient(top, #424242 5%, #242424 100%);
    background:-ms-linear-gradient(top, #424242 5%, #242424 100%);
    background:linear-gradient(to bottom, #424242 5%, #242424 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#424242', endColorstr='#242424',GradientType=0);
    background-color:#424242;
    -moz-border-radius:8px;
    -webkit-border-radius:8px;
    border-radius:8px;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Trebuchet MS;
    font-size:13px;
    padding:9px 25px;
    text-decoration:none;
    margin-left:25px;
    opacity: 0.9;
}
.advanced_buttons:hover {
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #242424), color-stop(1, #424242));
    background:-moz-linear-gradient(top, #242424 5%, #424242 100%);
    background:-webkit-linear-gradient(top, #242424 5%, #424242 100%);
    background:-o-linear-gradient(top, #242424 5%, #424242 100%);
    background:-ms-linear-gradient(top, #242424 5%, #424242 100%);
    background:linear-gradient(to bottom, #242424 5%, #424242 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#242424', endColorstr='#424242',GradientType=0);
    background-color:#242424;
}
.advanced_buttons:active {
    position:relative;
    top:1px;
}
		
		* {
  box-sizing: border-box;
}

/* Style the search field */
.searchbtn input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
  border-top-left-radius: 28px;
    border-bottom-left-radius: 28px;
}

/* Style the submit button */
.searchbtn button {
  float: left;
  width: 10%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
 
  cursor: pointer;

    border-top-right-radius: 28px;
    border-bottom-right-radius: 28px;
}

.searchbtn button:hover {
  background: #0b7dda;
}

/* Clear floats */
.searchbtn::after {
  content: "";
  clear: both;
  display: table;
}
	
	
	

.advanced_button {
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #424242), color-stop(1, #242424));
    background:-moz-linear-gradient(top, #424242 5%, #242424 100%);
    background:-webkit-linear-gradient(top, #424242 5%, #242424 100%);
    background:-o-linear-gradient(top, #424242 5%, #242424 100%);
    background:-ms-linear-gradient(top, #424242 5%, #242424 100%);
    background:linear-gradient(to bottom, #424242 5%, #242424 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#424242', endColorstr='#242424',GradientType=0);
    background-color:#424242;
    -moz-border-radius:8px;
    -webkit-border-radius:8px;
    border-radius:8px;

    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Trebuchet MS;
    font-size:30px;
    padding:20px 20px;
    text-decoration:none;
    margin-left:25px;
    opacity: 0.9;
  
}
.advanced_button:hover {
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #242424), color-stop(1, #424242));
    background:-moz-linear-gradient(top, #242424 5%, #424242 100%);
    background:-webkit-linear-gradient(top, #242424 5%, #424242 100%);
    background:-o-linear-gradient(top, #242424 5%, #424242 100%);
    background:-ms-linear-gradient(top, #242424 5%, #424242 100%);
    background:linear-gradient(to bottom, #242424 5%, #424242 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#242424', endColorstr='#424242',GradientType=0);
    background-color:#242424;
}
#questions{
    opacity: 0.8;
}
#addquestions{
    opacity: 0.8;
}
.advanced_buttons:active {
    position:relative;
    top:1px;
}
.advanced_button:active {
	position:relative;
	top:1px;
}

        
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#search_button').click(function(){
                $("#addquestions").hide();
                $("#questions").show();
                $("#myTable321").empty();

                $("#questions").on('rowClick',function(event){
                    $.post('../Controller/idquestionmainpage.php',{value:event.args.row.ID},
                        function(){
                            window.location.href="question.php";

                        });
                });


         
                var str="";
                $.post('../Controller/list_backend.php',{search:$('#search_box').val()},
 
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
                              theme: 'custom',
                         
                          columns: [{ text: 'title', datafield: 'title', width: 250},{ text: 'user', datafield: 'user', width: 100 },{text: 'date', datafield: 'date', width: 250, align:'right',cellsalign:'right'},{text: 'Replies', datafield: 'number_replies', width:100 , align:'right',cellsalign:'right'}]
                        });

                        dataAdapter.dataBind();
                        $("#questions").jqxDataTable("updateBoundData");


                });

            });


            $('#advanced_button').click(function(){

                checkbox();
                $('#questions').hide();
                $('#addquestions').hide();
                $("#advancedModal").show();
            });

            $('#canceladvanced').click(function(){
                $("#advancedModal").hide();
            });

            
            $('#advancedsearchbutton').click(function(){
                $('#addquestions').show();

                var val = [];
                $(':checkbox:checked').each(function(i){
                    val[i] = $(this).val();
                });
                $("#addquestions").on('rowClick',function(event){
                    $.post('../Controller/idquestionmainpage.php',{value:event.args.row.ID},
                        function(){
                            window.location.href="question.php";

                        });
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


                        $("#addquestions").jqxDataTable(
                            {
                                altRows: true,
                                pageable: true,
                                sortable: true,
                                source: dataAdapter,
                                theme: 'custom',
                             
                            columns: [{ text: 'title', datafield: 'title', width: 250},{ text: 'user', datafield: 'user', width: 100 },{text: 'date', datafield: 'date', width: 250, align:'right',cellsalign:'right'},{text: 'Replies', datafield: 'number_replies', width:100 , align:'right',cellsalign:'right'}]
                        });

                        dataAdapter.dataBind();
    $("#addquestions").jqxDataTable("updateBoundData");

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

    <b>Enter Search term:
	<!-- taken from https://www.w3schools.com/howto/howto_css_search_button.asp --> 
	<div class="searchbtn" >
  <input placeholder="Search.." name="search" id="search_box" type="text" search_box="question">
  <button id="search_button" value= "search"><i class="fa fa-search"></i></button>
</div>
	
        <br>
        <button id="advanced_button" class="advanced_button" value= "advanced">Advanced</button>

    </b>
</div>




    <div style="margin-top: 2%;">
        <ul id="myTable321">

        </ul>
    </div>

    <div id="questions" style="margin-left: 25%"></div>
    <div id="addquestions" style="margin-left: 25%"></div>

    <!-- popup thing-->
    <div id="advancedModal" class="modal-advanced" hidden>

        <!-- Modal content -->
        <div style="background-color: #3D3C3B; color: white; border-radius: 25px; font-family:trebuchet MS; padding: 20px;margin-left: 20%;margin-right: 20%">
            <h2> Current tags in the database </h2>
                <ul id="tags_table"></ul>
                <button id="canceladvanced" class="advanced_buttons" > Cancel </button>
                <button id="advancedsearchbutton" class="advanced_buttons" >Search</button>

        </div>


    </div>
</body>

</html>