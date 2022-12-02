<?php
    session_start();
    include('../Includes/serverlogin.php')
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="../CSS/ispgayalogincss.css" type="text/css" rel="stylesheet">
</head>
<body>
<img src="../Imagens/ispgayalogo.png">
    <br>
    <div id="div1">

        <form action="" target="_self" method="post">
        <h1>Login</h1>
        <a>Username:</a><br><br>
        
        <input type="text" id="user" style="width: 300px ;height:20px;background-color: #D8D8D8" name="user">
        
        <br><br>
        <a>Password:</a><br><br>
        
        <input type="Password" id="pass" style="width: 300px ;height:20px;background-color: #D8D8D8" name="pass">
        <center>
        <br>
        <button type="submit" name="pesq" style="font-family: Lucida Sans Unicode; background-color: orange; color: white; width: 300px; height: 35px;">Inserir</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        </center>
        </form>
    </div><br><br>
</body>
</html>