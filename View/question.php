<!DOCTYPE html>
<html>
<head>
    <title> List</title>
    <link rel="stylesheet" href="../Jqwidgets/jqwidgets/styles/custom.css" type="text/css">
    <style>
        body{
            background-color: white;
        }
        .button {
            background-color: #ff6666;
            border:none;
            color: white;
            padding: 15px;
            text-align: center;
            display: inline-block;
            font-size: 10px;
            margin-top: 5px;
            margin-left: 50px;
            cursor: pointer;
            border-radius: 12px;

        }
        .button:hover{background-color:#ff0000}

                #Title:hover {
            color: blue;
            cursor: pointer;
        }

        .username{
            float:right;
            margin-top:3%;
            margin-right:4%;
            margin-bottom: 1%;
        }

        .titlebox{
            width:100%;
            height: 20%;
            border: 1px solid black;
            background-color: lightgrey;
            opacity: 0.8;
         
                    }

        .replybox{
            width:52%;
            float:right;

            display:flex;
            flex-direction: column;

        }

        .recommendbox{
            width: 44%;
            float:left;

        }



        .questioncontainer{
            display: flex;
            flex-direction: column;
            /*border: 3px solid gray; */
            border-left: 6px solid green;
            margin: 3%;
            background-color: #f1f1f1;
            border-radius: 10px;
            font-family: Verdana;
        }

        #helpful{
            border-left: 6px solid green;
        }
        #unhelpful{
            border-left: 6px solid red;
        }
        .questioncontainer>div {
            background-color: #f1f1f1;
            /*margin: 3%;
            padding:2%;	*/
        }


        .questioninfocontainer{
            display:flex;
            flex-direction: row;
            justify-content: space-between;
            /*border: 1px solid blue; */
            /*margin: 4%; */
            margin-right: 2%;
            margin-top: 2%;
            margin-left: 2%;
        }
        .userboxed{

            flex:0 1 10%;
            height: 10%;
            font-size: 16px;
            cursor: pointer;
            padding-right: 5%;
        }
        .descboxed{
            background-color: white;
            overflow: auto;
            /*margin: 5%; */

            padding: 3%;
            flex:0 1 80%;
            border-radius: 8px;
            font-size: 15px;
        }


        .buttoncontainer{
            display:flex;
            flex-direction: row;
            justify-content: flex-end;
            margin-right: 4%;
            /*border: 1px solid red; */

        }

        .displayupvote{
            background-color: white;
            border: none;
            color: black;
            padding: 6px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 5px 10px;
            border-radius: 7px;
        }
        .plusbutton{
            background-color: forestgreen;
            border: none;
            color: white;
            padding: 6px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 7px;
        }
        .plusbutton:hover{background-color: darkgreen;}
        .minusbutton{
            background-color: red;
            border: none;
            color: white;
            padding: 6px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 7px;
        }
        .minusbutton:hover{
            background-color: darkred;}
        li{list-style-type: none;}
        .titleinfo{
            width: 100%;
            height: 20%;
            border: black 1px solid;
        }
        .title{
            text-align:center;
        }
        #relatedQuestion{
            opacity: 0.8;
        }
        .description{
            margin-left: 20%;
            word-wrap: break-word;
        }
        .usernamelabel{
            margin-left: 20%;
        }
        .replydescription {
            width: 100%;
        }

        .checked{
            font-size:10px;
        }
	.replybtn {
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
    font-size:large;
    padding:9px 25px;
    text-decoration:none;
    margin-left:25px;
    opacity: 0.9;
  
}
.replybtn:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
	background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);
	background-color:#476e9e;   background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #242424), color-stop(1, #424242));
    background:-moz-linear-gradient(top, #242424 5%, #424242 100%);
    background:-webkit-linear-gradient(top, #242424 5%, #424242 100%);
    background:-o-linear-gradient(top, #242424 5%, #424242 100%);
    background:-ms-linear-gradient(top, #242424 5%, #424242 100%);
    background:linear-gradient(to bottom, #242424 5%, #424242 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#242424', endColorstr='#424242',GradientType=0);
    background-color:#242424;
}
.replybtn:active {
	position:relative;
	top:1px;

}

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">


        $(document).ready(function(){
            $("#savenewreply").click(function(){
                if($("#newreply").val()=="")
                    alert("You did nnot leave your reply blank");
                else{
                    $.post("../Controller/editnewreply.php",{
                            id: $("#newidreply").val(),
                            desc: $("#newreply").val()
                        },
                        function(){
                        window.location.href="question.php";
                        });
                }

            })
            $("#button").click(function () {
                $("#jqxwindow").jqxWindow('open');
            });
            $("#jqxwindow").jqxWindow({
                height: 100,
                width: 200,
                theme: 'energyblue',
                autoOpen: false
            });
            inforeply();
                        $.post("../Controller/relatedQuestion.php", function(data){
                            var dataarray = JSON.parse(data);

            var source =
            {
             localdata: dataarray,
             datatype: "array"
            };

         var dataAdapter = new $.jqx.dataAdapter(source);
            if(dataarray.length>0){
        $("#relatedQuestion").jqxDataTable(
         {
             altRows: true,
             pageable: true,
            sortable: true,
             source: dataAdapter,
             theme: 'custom',
 
        columns: [{ text: 'title', datafield: 'title', width: 50},{text: 'date', datafield: 'date', width: 200, align:'right',cellsalign:'right'},
            {text: 'Replies', datafield: 'number_replies', width:70 , align:'right',cellsalign:'right'}]
        });

dataAdapter.dataBind();
$("#relatedQuestion").jqxDataTable("updateBoundData");
        }
        else{
            $("#relatedQuestion").text("No related questions");
        }
        
        });
            $("#relatedQuestion").on('rowClick',function(event){
                $.post('../Controller/idquestionmainpage.php',{value:event.args.row.ID},
                    function(data){
                        window.location.href="question.php";

                    });
            });



            $("#addreply").click(function(){
                $.post("../Controller/addreply.php",{
                        desc: $("#inputReplyInfo").val()
                    },
                    function(data){
                    var valueIfCanReply = JSON.parse(data);
                        if(valueIfCanReply[0]){
                        window.location.href="question.php";}
                        else{
                            alert("To reply you need to be connected");}
                    });
            });


            function inforeply() {
                $.post("../Controller/TitleInfo.php",
                    function(data){
                        var info = JSON.parse(data);

                        $("#titleinfoTitle").html(info['title']);
                        $("#userinfotitle").html(info['user']);
                        $("#dateinfotitle").html(info['date']);
                        $("#idtitleinfo").html(info['ID']);
                        $("#descinfoTitleinput").html(info['description']);

                    });
                $.post("../controller/replyinfo.php", function (data) {
                    var info = JSON.parse(data);

                    reply = "";
                    bestreply="";
                    for (var x = info[0].length-1; x >= 0; x--) {
                        if(info[0][x]['best']== 1){
                            if(info[1]){
                                bestreply+= "<li>";
                            if(info[0][x]['validate']==0 )
                            bestreply += "<div class=\"questioncontainer\" id=\"unhelpful\">";
                            else{
                                bestreply += "<div class=\"questioncontainer\" id=\"helpful\">";
                            }
                            bestreply += "<div class=\"questioninfocontainer\"><div class=\"userboxed\" >"+ info[0][x]['username']+"<img src = '../Img/checked.png' style='width:20px;height:20px;'> " +"</div><div class=\"descboxed\">"+ info[0][x]['description_reply'] +"</div></div><div class=\"buttoncontainer\" >";
                            bestreply += "<button class= \"pbuttonboxed plusbutton\" onclick='approve("+info[0][x]['ID']+")'>Approved</button><button class= \"mbuttonboxed minusbutton\" onclick='decline("+info[0][x]['ID']+")'>Decline</button>";
                            bestreply += "<div class=\"displayupvote\"> "+info[0][x]['total_positive'] +" </div><button class=\"pbuttonboxed plusbutton\" onclick='upvote("+info[0][x]['ID']+")'>+</button><button class= \"mbuttonboxed minusbutton\" onclick='downvote("+info[0][x]['ID']+")'>-</button>";
                            if(info[0][x]['own'])
                                bestreply+="<button class=\"pbuttonboxed plusbutton\" onclick='editreply("+info[0][x]['ID']+")'>edit</button>";
                            bestreply+="</div></div><input type=\"hidden\"/>";

                        }
                        else{
                            if(info[0][x]['validate']==1 ) {
                                bestreply += "<li><div class=\"questioncontainer\" id=\"helpful\">";
                                bestreply += "<div class=\"questioninfocontainer\"><div class=\"userboxed\" >" + info[0][x]['username'] +"<img src = '../Img/checked.png' style='width:20px;height:20px;'> " +"</div><div class=\"descboxed\">" + info[0][x]['description_reply'] + "</div></div><div class=\"buttoncontainer\" >";
                                bestreply += "<div class=\"displayupvote\"> " + info[0][x]['total_positive'] + " </div><button class=\"pbuttonboxed plusbutton\" onclick='upvote(" + info[0][x]['ID'] + ")'>+</button><button class= \"mbuttonboxed minusbutton\" onclick='downvote(" + info[0][x]['ID'] + ")'>-</button>";
                                if(info[0][x]['own'])
                                    bestreply+="<button class=\"pbuttonboxed plusbutton\" onclick='editreply("+info[0][x]['ID']+")'>edit</button>";
                                bestreply+="</div></div><input type=\"hidden\"/>";
                            }}
                            
                        }
                        else{                       
                            reply += "<li>";
                            if(info[0][x]['validate']==0 ){
                                reply += "<div class=\"questioncontainer\" id=\"unhelpful\">";
                            }
                            else{
                                reply += "<div class=\"questioncontainer\" id=\"helpful\">";
                            }
                          
                            if(info[1]==true){
                                reply += "<div class=\"questioninfocontainer\"><div class=\"userboxed\" >"+ info[0][x]['username'] +"<button class = \"checked\" onclick='checked("+info[0][x]['ID']+","+info[0][x]['IDQuestion']+")'> Choose as best reply </button> "+"</div><div class=\"descboxed\">"+ info[0][x]['description_reply'] +"</div></div><div class=\"buttoncontainer\" >";
                                reply += "<button class= \"mbuttonboxed minusbutton\" onclick='decline("+info[0][x]['ID']+")'>Decline</button>";
                            }
                            else{
                                reply += "<div class=\"questioninfocontainer\"><div class=\"userboxed\" >"+ info[0][x]['username'] +"</div><div class=\"descboxed\">"+ info[0][x]['description_reply'] +"</div></div><div class=\"buttoncontainer\" >";
                            }
                            reply += "<div class=\"displayupvote\"> "+info[0][x]['total_positive'] +" </div><button class=\"pbuttonboxed plusbutton\" onclick='upvote("+info[0][x]['ID']+")'>+</button><button class= \"mbuttonboxed minusbutton\" onclick='downvote("+info[0][x]['ID']+")'>-</button>";
                            if(info[0][x]['own'])
                                reply+="<button class=\"pbuttonboxed plusbutton\" onclick='editreply("+info[0][x]['ID']+")'>edit</button>";
                            reply+="</div></div><input type=\"hidden\"/></li>";
                        }
                    }
                    $('#replies').prepend(bestreply);
                    $("#replies").append(reply);

                });
            }
});


                                function saveIdHoster(idQuestion){
            var xhttp = new XMLHttpRequest();

            xhttp.open("POST", "../controller/ChoosenQuestion.php", true);

            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("value="+idQuestion);
            window.location.href="question.php";

        }


        function checked(id, idquestion){
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "../controller/checked.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("value="+id+"&question="+idquestion);
            window.location.href="question.php"; 

        }
        function editreply(id){
            var directionwindow = document.getElementById("newidreply");
            directionwindow.value=id;
            var grissel = document.getElementById("newreply");
            grissel.value=id;
            var windowofnewreply = document.getElementById("jqxwindow");
            windowofnewreply.style.display="block";


        }


        function approve(id){
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "../controller/approveReply.php", true);

            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("value="+id);
            window.location.href="question.php";            }

        function decline(id){
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "../controller/declineReply.php", true);

            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("value="+id);
            window.location.href="question.php";
        }

        function upvote(id){
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "../controller/upvoteReply.php", true);

            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("value="+id);
            window.location.href="question.php";            }

        function downvote(id){
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "../controller/downvoteReply.php", true);

            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("value="+id);
            window.location.href="question.php";            
        }

    </script>
    <?php include('header.php'); ?>
</head>
<body>
<div>
    <div class="titlebox">     <div class="titleinfo">


            <h1 class="title" id="titleinfoTitle" >Title</h1>
            <br>
            <label class="usernamelabel">By: </label><label id="userinfotitle"></label><label class="usernamelabel">Date: </label><label id="dateinfotitle"></label><label id="idtitleinfo"></label>
            <br>
            <br>
            <label id="descinfoTitle" class="description">Description:</label>
            <label id="descinfoTitleinput"></label>
            <div class="container" style="text-align: center">
                <button type="button" class="replybtn" data-toggle="modal" data-target="#myModal">reply</button>

            </div>

        </div>
        </div>
    <div class="replybox">
        <ul id="replies">




        </ul>

    </div>
    <div id='jqxwindow'>
        <div>Edit Reply</div>
        <div><textarea id="newreply" type="text" style="margin-right: 3%" ></textarea><input id="newidreply" type="text" hidden/><button id="savenewreply">save</button></div>

    </div>


    <div class ="recommendbox"> 
    <h2> Related Questions </h2>
<div id="relatedQuestion">

</div>

    </div>
</div>
<div class="container">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Reply</h4>
                </div>
                <div class="modal-body">
                    <p>Enter your reply:</p>
                    <textarea id="inputReplyInfo" class="replydescription"></textarea>
                </div>
                <div class="modal-footer">

                    <button type="button" id="addreply" class="btn btn-default" data-dismiss="modal">Add</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>
</body>
</html>