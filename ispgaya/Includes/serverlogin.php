<?php
if(isset($_POST['pesq'])){
	include('config.php');
	 
    //Verificar se o nome de usuário existe na tabela
	$query="select username, password, permissao from users WHERE username=?";
	$state=$ms->prepare($query);
	$state->bind_param('s',$_POST['user']);
	$state->execute();
	$state->bind_result($username,$password,$permissao);

	if($state->fetch()){

		//Se existir, verificar a password
		if(password_verify($_POST['pass'], $password)){
			$_SESSION['username'] = $username;
			header('Location: ../Site/menu.php');
			$_SESSION['permissao'] = $permissao;
			exit();
		}

		//Se a password estiver errada
		else {
			header('Location: ../index.php');
			exit();
		}
	}

	//Não foi encontrado este usuário
	else {
		header('Location: ../index.php');
		exit();
	}
}
