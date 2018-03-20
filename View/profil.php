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

    #firstImg{
            cursor: pointer;
        }
    #secondImg{
            cursor: pointer;
        }
    #thirdImg{
            cursor: pointer;
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
<button id="backgroundimgchange">Change Background</button>
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
<div id="backgroundimg" style="text-align: center" hidden>
    <h3>Choose a Background image</h3>
    <img id="firstImg" src="../Img/one-pieceR.png" alt="image1" width="300" height="300" style="margin-right: 3%">
    <img id="secondImg" alt="image2" src="../Img/one-pieceR.png" width="300" height="300" style="margin-right: 3%">
    <img id="thirdImg" alt="image3" src="../Img/one-pieceR.png" width="300" height="300">
    <br>
    <input id="ImgChoose" type="text" placeholder="Choose a background" disabled>
    <button id="saveimg">Save Image</button>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var Pathimg1;
        var Pathimg2;
        var Pathimg3;
        $.post("../Controller/loadImg.php",
            function(data){
            var imageBack = JSON.parse(data);
                Pathimg1 = imageBack[3];
                Pathimg2 = imageBack[4];
                Pathimg3 = imageBack[5];
                $("#firstImg").attr("src",imageBack[2]);
                $("#secondImg").attr("src",imageBack[2]);
                $("#thirdImg").attr("src",imageBack[2]);


            });

        $("#saveimg").click(function(){
            if(confirm("Do you really want the "+$("#ImgChoose").val())){
                $.post("../Controller/changeImg.php",{data:$("#ImgChoose").val()},
                    function(data){
                        window.location.href="index.php";


                    });
            }
        });
        $("#firstImg").mouseover(function(){
            var urlimg = "url("+Pathimg1+")";
            $('#bodypart').css('backgroundImage', urlimg);
        });
        $("#secondImg").mouseover(function(){
            var urlimg = "url("+Pathimg2+")";
            $('#bodypart').css('backgroundImage', urlimg);
        });
        $("#thirdImg").mouseover(function(){
            var urlimg = "url("+Pathimg3+")";
            $('#bodypart').css('backgroundImage', urlimg);
        });
        $("#firstImg").click(function(){
            $("#ImgChoose").val("Left Image");
        });
        $("#secondImg").click(function(){
            $("#ImgChoose").val("Middle Image");
        });
        $("#thirdImg").click(function(){
            $("#ImgChoose").val("Right Image");
        });
        $("#confirmenewpassword").click(function(){

            $.post("../Controller/newpass.php",{password:$("#newpassword").val()},
                function(data){
                alert("Sucessfully change password");

        }); });


        $("#graphinfo").click(function(){
            $("#graph").show();
            $("#password").hide();
            $("#backgroundimg").hide();
        });
        $("#passwordchange").click(function(){
            $("#graph").hide();
            $("#password").show();
            $("#backgroundimg").hide();
        });
        $("#backgroundimgchange").click(function(){
            $("#graph").hide();
            $("#password").hide();
            $("#backgroundimg").show();
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