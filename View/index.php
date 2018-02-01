<!DOCTYPE html>
<html>
<head>
<title>Main Page</title>
<style>
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
</style>
</head>
<body>
<nav>
    <img src="../Img/LogoOMQ.png" alt="Logo" height="80px" width="80px"/>
    
</nav>
<p> We are going to work on the main page . We are going to add a login and register button for the next sprint. This is only a test line for the MAIN.</p>
<button class="button" onclick="window.location.href='add.php'"> Next Page</button>
<button class="button" onclick="window.location.href='../Config/db_server.php'"> Test database</button>
</body>
</html>