<!-- Verificação do login -->
<?php include('../Includes/verificaloginadmin.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Consulta Admin</title>
    <link href="../CSS/consultaadmincss.css" type="text/css" rel="stylesheet">
</head>

<?php
    //Definição das variáveis e das credenciais da base de dados
    $msg="";
    $_SESSION['msg1']="";
    $msg1="";
    $username="";
    $somaaaaaa=0;
    $nomesomaencontrado = 0; 
    $listanome = array();   
    include('../Includes/config.php');
?>

<body>
    <img style="cursor: pointer;" onclick="window.location.href='menu.php'" src="../Imagens/ispgayalogo.png">
    <button onclick="window.location.href='menuutilizador.php'" id="c" style="background-color: orange; color: white; margin: right;" name="menu">Voltar ao menu Administrador</button>
    <br>
	<form action="" target="_self" method="post">
    <center>
		<h1>Consulta de Administradores</h1>
        <table class='content-table'><thead><tr><th>Nome de Utilizador</th><th>Email</th><th>Permissão</th><th>Eliminar?</th></thead><tbody>
        <?php
        
        //Mostrar a tabela
        $qr = "select username,email,permissao from users where 1=1";   
        $ordem = $ms->prepare($qr);             
        $ordem->execute();  
        $ordem->bind_result($username,$email,$permissao);

        
        
        while($somaaaaaa<100){
            if($ordem->fetch()){
            if($permissao==1){
                $perm='Administrador';
            }
            else{
                $perm='Utilizador';
            }
            echo "<tr><td>" . $username . "</td><td> " . $email . "</td><td> " . $perm . "</td><td><input type='checkbox' id='checkbox' value='0' name='checkbox" . $nomesomaencontrado . "'> </td></tr>";
            $listanome[$nomesomaencontrado]=$username;
            $nomesomaencontrado++;
            }
        $somaaaaaa++;
        }

        //Eliminar os dados selecionados na checkbox
        if (isset($_POST['verificarentregue'])){
            for ($i=0; $i < $nomesomaencontrado; $i++) { 
                if (isset($_POST['checkbox' . $i])) {
                    
                    $qr = "delete from users where username='" . $listanome[$i] . "'";
                    $ordem1 = $ms->prepare($qr);  
                    $ordem1->execute();
                    $ordem1->close();
                    header("refresh:0");
                } 
            }
        }
        echo "</tbody></table>";
        echo '<button type="submit" name="verificarentregue" style="font-family: Lucida Sans Unicode; background-color: orange; color: white; width: 400px; height: 35px;">Confirmar Alterações</button>';
        echo $_SESSION['msg1'];
        ?>
        </center>
    </form>
</body>
</html>