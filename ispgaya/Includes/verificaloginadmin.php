<?php

//Verificação do login em todas as páginas do Administrador
session_start();
if(!$_SESSION['username']) {
    header('Location: ../index.php');
    exit();
    
}

//Verificar permissão do usuário
if($_SESSION['permissao']=='0'){
    header('Location: menu.php');
    exit();
}
?>