<!-- Verificação do login -->
<?php include('../Includes/verificaloginadmin.php'); ?>

<?php include('../Includes/server.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Registo</title>
    <link href="../CSS/registocss.css" type="text/css" rel="stylesheet">
</head>

<body>
    <img style="cursor: pointer;" onclick="window.location.href='menu.php'" src="../Imagens/ispgayalogo.png">
    <button onclick="window.location.href='menuutilizador.php'" id="c" style="background-color: orange; color: white; margin: right;" name="menu">Voltar ao menu Administrador</button><br>
    <div id="div1">
        <form action="" target="_self" method="post">
        <h1>Registro</h1>
        <a>Utilizador:</a><br><br>
        
        <input type="text" value="<?php echo $username; ?>" id="user" style="width: 300px ;height:20px;background-color: #D8D8D8" name="username">
        
        <br><br>
        <a>Email:</a><br><br>
        
        <input type="text" value="<?php echo $email; ?>" id="email" style="width: 300px ;height:20px;background-color: #D8D8D8" name="email">
        
        <br><br>
        <a>Password:</a><br><br>
        
        <input type="Password" id="pass1" style="width: 300px ;height:20px;background-color: #D8D8D8" name="password_1">
        <br><br>
        <a>Confirmar Password:</a><br><br>
        
        <input type="Password" id="pass2" style="width: 300px ;height:20px;background-color: #D8D8D8" name="password_2">
        <center>
        <br>
        <button type="submit" name="register" style="font-family: Lucida Sans Unicode; background-color: orange; color: white; width: 300px; height: 35px;">Registrar Utilizador</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        </center>
        </form>
    </div><br>
    <div class="login">
        <?php echo $msglogin;?>
    </div>
    <center>
        <?php 
            //Mostrar os erros
            include('../Includes/errors.php'); 
        ?>
    </center>
</body>
</html>