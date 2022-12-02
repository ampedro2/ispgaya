<!-- Verificação do login -->
<?php include('../Includes/verificalogin.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link href="../CSS/menucss.css" type="text/css" rel="stylesheet">
</head>

<!-- Sair da Sessão -->
<?php if(isset($_POST['sair'])){ include('../Includes/logout.php'); } ?> 

<body>
<form action="" target="_self" method="post">
<img src="../Imagens/ispgayalogo.png">
<button id="c" onclick="myFunction()" style="position: absolute; background-color: orange; color: white; margin: right; height: 40px; width: 150px; margin-top: 2%; margin-left: 60%;" name="sair">Sair</button><br><br><br><br>
<div>
<nav>
  <ul>
    <li onclick="window.location.href='insercaosimples.php'" ><span>Inserção Simples</span></li>
    <li onclick="window.location.href='insercaocomposta.php'"><span>Inserção em Massa</span></li>
    <li onclick="window.location.href='consultaispgaya.php'"><span>Consulta de Cartões</span></li>
    <?php

    //Mostrar gestão de administração se o utilizador tiver permissão
    if($_SESSION['permissao']=='1'){
      $menu = "'menuutilizador.php'";
      echo '<li onclick="window.location.href=' . $menu . '"><span>Gestão de Administradores</span></li>';
    }
    ?> 
  </ul>
</nav>
</div>
</form>
<script>
function myFunction() {
  alert("Você vai ser deslogado");
}
</script>
</body>
</html>