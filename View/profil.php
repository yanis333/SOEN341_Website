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
</head>



<body>
<?php include('header.php'); ?>
<br>
<br>
<br>
<div class="align">
<button id="graphinfo">Statistique</button>
<button id="passwordchange">Password</button>
</div>
<div id="graph">
    <div id='chartContainer' class="chart"></div>
</div>
<div id="password" >
    <div class="align">
    <h2>Enter new password</h2>
        <input id="newpassword"/>
        <button id="confirmenewpassword">ok</button>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#confirmenewpassword").click(function(){

            $.post("../Controller/newpass.php",{password:$("#newpassword").val()},
                function(data){
                alert("Sucessfully change password");

        }); });


        $("#graphinfo").click(function(){
            $("#graph").show();
            $("#password").hide();
        });
        $("#passwordchange").click(function(){
            $("#graph").hide();
            $("#password").show();
        });
/*
        $.post("../Controller/profilGraph.php",{
                desc: $("#inputReplyInfo").val()
            },
            function(data){
                var valueIfCanReply = JSON.parse(data);
                if(valueIfCanReply[0]){
                    window.location.href="question.php";}
                else{
                    alert("To reply you need to be connected");}
            });*/

        // prepare chart data
        var  sampleData = [
            { Day:'Sept', Keith:30, Erica:15, George: 25},
            { Day:'Oct', Keith:25, Erica:25, George: 30},
            { Day:'Nov', Keith:30, Erica:20, George: 25},
            { Day:'Dec', Keith:35, Erica:25, George: 45},
            { Day:'Jan', Keith:20, Erica:20, George: 25},
            { Day:'Feb', Keith:30, Erica:20, George: 30},
            { Day:'Mar', Keith:60, Erica:45, George: 90},
            { Day:'Avr', Keith:60, Erica:45, George: 90},
            { Day:'May', Keith:60, Erica:45, George: 90},
            { Day:'Jun', Keith:60, Erica:45, George: 90},
            { Day:'Jul', Keith:60, Erica:45, George: 90},
            { Day:'Aug', Keith:60, Erica:45, George: 90},
        ];

        // prepare jqxChart settings
        var settings = {
            title:"",
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
                                maxValue: 100,
                                unitInterval: 10,
                                description: 'Time in minutes'
                            },
                        series: [
                            { dataField: 'Keith', displayText: '#Question'},
                            { dataField: 'Erica', displayText: '#Reply'}
                        ]
                    }
                ]
        };

        // select the chartContainer DIV element and render the chart.
        $('#chartContainer').jqxChart(settings);
    });
</script>

</body>

</html>