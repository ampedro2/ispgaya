<?php

//Verificação do login em todas as páginas
session_start();
if(!$_SESSION['username']) {
	header('Location: ../index.php');
	exit();
}
?>