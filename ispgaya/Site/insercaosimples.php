<!-- Verificação do login -->
<?php include('../Includes/verificalogin.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Inserção Simples</title>
    <link href="../CSS/insercaosimplescss.css" type="text/css" rel="stylesheet">
</head>
<?php
    //Definição das variáveis e das credenciais da base de dados
    $msg="";
    $msg1="";
    include('../Includes/config.php');

    //Inserção dos dados
    
    if(isset($_POST['inserir'])){
        //Verificar se os campos estão vazios
        if($_POST['numidentificacao']=='' || $_POST['numcartao']=='' || $_POST['nome']=='' || $_POST['apelido']=='' || $_POST['email']=='' || $_POST['data']==''){
            $msg='<h3 class="erro">Erro, Existem campos por preencher!</h3>';
        }

        //Inserir os dados
        else{
            $qr = "INSERT INTO tbl_cartao(numidentificacao,numcartao,nome,apelido,Email,perfil,Data) VALUES(?,?,?,?,?,?,?)";       
            $ordem = $ms->prepare($qr);
            $ordem->bind_param('iisssss', $_POST["numidentificacao"], $_POST["numcartao"], $_POST["nome"], $_POST["apelido"],$_POST["email"], $_POST["select"], $_POST["data"]);
            if ($ordem->execute() && $ordem->affected_rows>0){
                $msg='<h3 class="sucesso">O cartão foi inserido!</h3>';
                $numcartao=$_POST["numcartao"];
                $numcartao=$_POST["nome"];
                $email=$_POST["email"];
                $perfil=$_POST["select"];
                $data=$_POST["data"];
                /*$to = $email;
                $subject = "Entrega de Cartão";
                $message = "(Mensagem)";
                A imagem do CIISP está disponível na pasta de imagens caso seja preciso utilizar na mensagem do email
                $headers = 'From: <(email ispgaya)>';
                mail($to,$subject,$message,$headers);*/
            }
            else{
                $msg='<h3 class="erro" >Erro: ('. $ms->errno .') '. $ms->error . '</h3>';
                $erro=1;
            }
            $ordem->close();
            
        }
    }
?>

<body>
    <img style="cursor: pointer;" onclick="window.location.href='menu.php'" src="../Imagens/ispgayalogo.png">
    <button onclick="window.location.href='menu.php'" id="c" style="background-color: orange; color: white; margin: right;" name="menu">Voltar ao menu</button>
    <br>
	<div>
		<form action="" target="_self" method="post">
		<h1>Inserção de Cartões</h1>
        Número de Identificação:<br>
        <input id="numeroidentificacao" type="number" style="width: 300px ;height:20px;background-color: #D8D8D8" name="numidentificacao">
        <br><br> Nº de cartão:&nbsp;&nbsp;<br>
        <input id="numerocartao" type="number" style="width: 300px ;height:20px;background-color: #D8D8D8" name="numcartao"></input>
        <br><br> Nome Titular:&nbsp;&nbsp; <br>       
        <input id="nome" type="text" style="width: 300px ;height:20px;background-color: #D8D8D8" name="nome"></input>
        <br><br> Apelido Titular:&nbsp;&nbsp;<br>
        <input id="apelido" type="text" style="width: 300px ;height:23px;background-color: #D8D8D8" name="apelido"></input>
        <br><br> Perfil:&nbsp;&nbsp;<br>
        <select id="perfil" name='select'>
        <option value="Docente">Docente</option>
        <option value="Aluno" selected>Aluno</option>
        </select>&nbsp;&nbsp;
        <br><br> Email:&nbsp;&nbsp;<br>
        <input id="email" type="text" style="width: 300px ;height:23px;background-color: #D8D8D8" name="email"></input>
        <br><br> Data de inserção:&nbsp;&nbsp;<br>
        <input id="data" type="date" style="width: 300px ;height:23px;background-color: #D8D8D8" name="data"></input>
        <center>
        <br><button type="submit" name="inserir" style="background-color: orange; color: white; width: 300px; height: 35px;">Inserir</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        </center>
        </form>
	</div>
<?php echo $msg ?>
</body>
<?php
    
?>
</html>