<!DOCTYPE html>
<html>
<head>
    <style>
        .button{
            color: black;
            background: forestgreen;
        }
    </style>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#Yanis").val("Yanis Sibachir");
			  $("#Michael").val("Michael Tang");
                $("#Karl").val("Karl Joey Chami");
                 $("#Berfin").val("Berfin Saricam");
                    $("#Wu").val("Wu Wen Tang");
            
            $("#button").click(function(){
                document.write("If you can see this text you can Commit and Push");
            });

        });
    </script>
</head>
<body>

<p>Name: <input id="Yanis" type="text"></p>
<p>Name: <input id="Michael" type="text"></p>
<p>Name: <input id="Karl" type="text"></p>    
<p>Name: <input id="Berfin" type="text"></p>  
<p>Name: <input id="Wu" type="text"></p> 

<button id="button" class="button">Verify</button>
</body>
</html>
