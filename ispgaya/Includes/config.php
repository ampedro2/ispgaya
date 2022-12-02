<?php
// Credenciais da Base de Dados
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'siteispg');
 
// Tentativa de conexão 
$ms = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Verificar se a conexão foi bem sucedida
if($ms === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>