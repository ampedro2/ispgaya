<?php

// Include da Bases de Dados e variáveis usadas
$username = "";
$email = "";
$errors = array();
$inutil=0;
$msglogin='';
$msg="";
$msg1="";
include('config.php');

if (isset($_POST['register'])){
	
	//Definir variáveis com as credenciais
	$username = ($_POST['username']);
	$email = ($_POST['email']);
	$password_1 = ($_POST['password_1']);
	$password_2 = ($_POST['password_2']);

	//Verificar se os campos não estão vazios e verificar se as 2 passwords estão iguais
	if (empty($username)){
		array_push($errors, "É necessário colocar o username");
	}
	if (empty($email)){
		array_push($errors, "É necessário colocar o email");
	}
	if (empty($password_1)){
		array_push($errors, "É necessário colocar a password");
	}
    if ($password_1 != $password_2){
    	array_push($errors, "As duas passwords não estão iguais");
    }

	//Enviar os dados para a base de dados caso não existam erros
    if(count($errors)==0){
    	$pw = password_hash($password_1,PASSWORD_DEFAULT);
    	$qr = "INSERT INTO users(username,email,password) VALUES(?,?,?)";       
                    
        $ordem = $ms->prepare($qr);
                
        $ordem->bind_param('sss', $username, $email, $pw);
            
        $ordem->execute();

        $ordem->close();
        
        $_SESSION['username'] = $username;
            
        $msglogin='A conta foi registada com sucesso';    
    }

}

?>