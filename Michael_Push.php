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
            $("#Michael").val("Michael Tang");

            $("#button").click(function(){
                document.write("If you can see this text you can Commit and Push");
            });

        });
    </script>
</head>
<body>

<p>Name: <input id="Michael" type="text"></p>

<button id="button" class="button">Verify</button>
</body>
</html>
