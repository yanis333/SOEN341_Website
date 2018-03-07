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