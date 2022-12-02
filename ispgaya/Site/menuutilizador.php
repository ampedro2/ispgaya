<!-- Verificação do login -->
<?php include('../Includes/verificaloginadmin.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu Admin</title>
	<link href="../CSS/menuutilizadorcss.css" type="text/css" rel="stylesheet">
</head>
<body>
<img style="cursor: pointer;" onclick="window.location.href='menu.php'" src="../Imagens/ispgayalogo.png">
<button onclick="window.location.href='menu.php'" id="c" style="background-color: orange; color: white; margin: right;" name="menu">Voltar ao menu</button>
<br><br><br>
<div>
<nav>
  <ul>
    <li onclick="window.location.href='ispgayaregisto.php'"><span>Registrar Administrador</span></li>
    <li onclick="window.location.href='ispgayaconsultaadmin.php'"><span>Consulta de Administradores</span></li>
  </ul>
</nav>
</div>
</body>
</html>