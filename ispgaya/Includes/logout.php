<?php
session_start();

//Destruir sessão e voltar á página de login
session_destroy();
header('Location: ../index.php');
exit();
?>