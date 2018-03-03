<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Search Page</title>
    <style>
        #container{
            text-align: center;
            color:#fffccc;}

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


    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#search_button').click(function(){
                $("#myTable321").empty();


                var str="";
                $.post('../Controller/list_backend.php',{search:$('#search_box').val()},
                    function(data){
                        var info = JSON.parse(data);
                        if(info[0]==null)
                            alert("Sorry, there are no results for your search. Try using keywords!");
                        else {
                            for (var i = 0; i<info.length; i++){


                                str+="<li style ='margin-top:"+(3*(i+1))+"%; margin-bottom: 3%; list-style: none ;'><div class='box12'><label class='bla'>Search Results: </label><label id=\"Title\"onclick=\"saveIdHoster("+info[i]["ID"]+")\"</label>"+info[i]["title"]+"<label class='bla2'></label><label class=\"date\"> Date: "+ info[i]["date"]+"</label><br> </div></li><br>";

                            }
                            $("#myTable321").append(str);


                        }

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
        <button id="search_button" value= "search">search</button>
    </div>
    </b>


    <div style="margin-top: 2%;">
        <ul id="myTable321">

        </ul>
    </div>
    </div>
</body>

</html>