<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>

    <link rel="stylesheet" type="text/css" href="login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../Jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxchart.core.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxdraw.js"></script>
    <script type="text/javascript" src="../Jqwidgets/jqwidgets/jqxdata.js"></script>

    <style>

    .chart{width:1200px; margin-left: 10%; height: 700px;}
    .align{text-align: center;}
    </style>
    <style>
.tooltip {
    position: relative;
    display: inline-block;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
</style>
</head>



<body>
<?php include('header.php'); ?>
<br>
<br>
<br>
<div class="align">
<button id="graphinfo">Statistique</button>
<button id="passwordchange">Password</button>
<button id="achievements">Achievements</button>
</div>

<div id="graph" >
    <div id='chartContainer' class="chart"></div>
    <div style="margin-left:10%">
    <h2>Question asked</h2>
    <div id="questions" class="align"></div>
    <h2>Question Replied</h2>
    <div id="reply" class="align"></div>
    </div>
</div>
<div id="password" hidden >

    <div class="align">
    <h2>Enter new password</h2>
        <input id="newpassword"/>
        <button id="confirmenewpassword">ok</button>
    </div>

</div>

<div id ="achievementsTab" hidden>
<h2 id = "totalAchievements">
</h2>
    <ul id = "achievementsTable" style="list-style: none;">

    </ul>
</div>

<script type="text/javascript">


    $(document).ready(function () {
        $("#confirmenewpassword").click(function(){

            $.post("../Controller/newpass.php",{password:$("#newpassword").val()},
                function(data){
                alert("Sucessfully change password");

        }); });


         $.post("../Controller/upvotesAchievement.php"
            ,
            function(data){
        });

        


        $("#achievements").click(function(){

            $("#achievementsTab").show();
            $("#password").hide();
            $("#graph").hide();
            $("#achievementsTable").empty();
            var str ="";
            $.post("../Controller/achievements.php", function(data){
                var info = JSON.parse(data);
                $('#totalAchievements').text(info.length-1 + " Achievements");
                for(var i = 1; i<info.length;i++){
                
                if(info[i].includes("naruto")){
                    str+="<div class='tooltip'><li><img height='100' width='100' src = '../Img/icons/"+info[i]+".png'><li><span class='tooltiptext'>"+info[i]+"</span></div>";
                }
               else if(info[i].includes("onepiece")){
                str+="<div class='tooltip'><li><img height='100' width='100' src = '../Img/icons/"+info[i]+".png'><li><span class='tooltiptext'>"+info[i]+"</span></div>";

                }

               else if(info[i].includes("bleach")){
                str+="<div class='tooltip'><li><img height='100' width='100' src = '../Img/icons/"+info[i]+".png'><li><span class='tooltiptext'>"+info[i]+"</span></div>";

                }
                else if(info[i].includes("dragonball")){
                    str+="<div class='tooltip'><li><img height='100' width='100' src = '../Img/icons/"+info[i]+".png'><li><span class='tooltiptext'>"+info[i]+"</span></div>";

                }
                else if(info[i].includes("Connaisseur")){
                    str+="<div class='tooltip'><li><img height='100' width='100' src = '../Img/icons/connaisseur.png'><li><span class='tooltiptext'>"+info[i]+"</span></div>";

                }
                else if(info[i].includes("Master")){
                    str+="<div class='tooltip'><li><img height='100' width='100' src = '../Img/icons/master.png'><li><span class='tooltiptext'>"+info[i]+"</span></div>";

                }
                else if(info[i].includes("GrandMaster")){
                    str+="<div class='tooltip'><li><img height='100' width='100' src = '../Img/icons/grandmaster.png'><li><span class='tooltiptext'>"+info[i]+"</span></div>";

                }
                else if(info[i].includes("God")){
                    str+="<div class='tooltip'><li><img height='100' width='100' src = '../Img/icons/god.png'><li><span class='tooltiptext'>"+info[i]+"</span></div>";

                }
                else{
                str+="<div class='tooltip'><li><img height='100' width='100' src = '../Img/icons/"+info[i]+".png'><li><span class='tooltiptext'>"+info[i]+"</span></div>";
                }
                }
                 $("#achievementsTable").append(str);
        });
        });


        
        $("#graphinfo").click(function(){
            $("#graph").show();
            $("#achievementsTab").hide();
            $("#password").hide();
        });
        $("#passwordchange").click(function(){
            $("#graph").hide();
            $("#achievementsTab").hide();
            $("#password").show();
        });


        $.post("../Controller/profilGraph.php"
            ,
            function(data){
            var info = JSON.parse(data);

                var source =
                    {
                        localdata: info[0],
                        datatype: "array"
                    };

                var dataAdapter = new $.jqx.dataAdapter(source);


                $("#questions").jqxDataTable(
                    {

                        altRows: true,
                        pageable: true,
                        sortable: true,
                        source: dataAdapter,

                        columns: [ {text:'id',datafield:'ID',width:100,align:'center'},{ text: 'title', datafield: 'title', width: 250,align:'center'},{ text: 'user', datafield: 'user', width: 100,align:'center' },{text: 'date', datafield: 'date', width: 250,align:'center'},{text: 'Replies', datafield: 'number_replies', width:100 ,align:'center'}]
                    });
                dataAdapter.dataBind();
                $("#questions").jqxDataTable("updateBoundData");

                var source =
                    {

                        localdata: info[1],
                        datatype: "array"
                    };

                var dataAdapter = new $.jqx.dataAdapter(source);


                $("#reply").jqxDataTable(
                    {
                        altRows: true,
                        pageable: true,
                        sortable: true,
                        source: dataAdapter,

                        columns: [ {text:'id',datafield:'ID',width:100,align:'center'},{ text: 'title', datafield: 'title', width: 250,align:'center'},{ text: 'user', datafield: 'user', width: 100,align:'center' },{text: 'date', datafield: 'date', width: 250,align:'center'},{text: 'Replies', datafield: 'number_replies', width:100 ,align:'center'}]
                    });
                dataAdapter.dataBind();
                $("#reply").jqxDataTable("updateBoundData");
            });
        $.post("../Controller/profilGraphinfo.php",
            function(data){
            var sampleData = JSON.parse(data);




        // prepare jqxChart settings
        var settings = {
            title:"",

            title:sampleData[12],

            description:"",
            padding: { left: 5, top: 5, right: 5, bottom: 5 },
            titlePadding: { left: 90, top: 0, right: 0, bottom: 10 },
            source: sampleData,
            categoryAxis:
                {
                    dataField: 'Day',
                    showGridLines: false
                },
            colorScheme: 'scheme01',
            seriesGroups:
                [
                    {
                        type: 'column',
                        columnsGapPercent: 30,
                        seriesGapPercent: 0,
                        valueAxis:
                            {
                                minValue: 0,

                                maxValue: 10,
                                unitInterval: 1,
                                description: 'Time in minutes'
                            },
                        series: [
                            { dataField: 'month', displayText: '#Question'},
                            { dataField: 'reply', displayText: '#Reply'}

                        ]
                    }
                ]
        };

        // select the chartContainer DIV element and render the chart.
        $('#chartContainer').jqxChart(settings);

            });

    });
</script>

</body>


</html>