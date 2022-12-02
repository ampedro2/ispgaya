<!-- Verificação do login -->
<?php include('../Includes/verificalogin.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="../CSS/insercaocompostacss.css" type="text/css" rel="stylesheet">
</head>

<?php
    //Definição das variáveis e das credenciais da base de dados
    $glo = 0;
    $inutil = 1;
    $msg="";
    $msg1="";
    $numidentificacao=$numcartao=$nome=$apelido='';
    $existe= false;
    $msg11="";
    include('../Includes/config.php');
?>

<body>
	<img style="cursor: pointer;" onclick="window.location.href='menu.php'" src="../Imagens/ispgayalogo.png">
  <button onclick="window.location.href='menu.php'" id="c" style="background-color: orange; color: white; margin: right;" name="menu">Voltar ao menu</button>
	<center>
	<h1>Inserção em Massa</h1>
	</center>
	<form action="" target="_self" method="post">
<div>
      <p style="text-align:center;">Cartão 1:&nbsp;&nbsp;
      <input type="number" name="numidentificacao1" value="" placeholder="Numero do Aluno">&nbsp;&nbsp;
      <input type="text" name="nome1" value="" placeholder="Nome" >&nbsp;&nbsp;
      <input type="text" name="apelido1" value="" placeholder="Apelido" >&nbsp;&nbsp;
      <input type="email" name="email1" value="" placeholder="Email" >&nbsp;&nbsp;
      <select name='select1'>
        <option value="Docente">Docente</option>
        <option value="Aluno" selected>Aluno</option>
      </select>&nbsp;&nbsp;
      <input type="number" name="numcartao1" value="" placeholder="Numero do Cartão" >&nbsp;&nbsp;
      <input type="date" name="data1" id='today1' value="today" placeholder="Data" >
      </p>
    <div>
      <p style="text-align:center;">Cartão 2:&nbsp;&nbsp;
      <input type="number" name="numidentificacao2" value="" placeholder="Numero do Aluno">&nbsp;&nbsp;
      <input type="text" name="nome2" value="" placeholder="Nome">&nbsp;&nbsp;
      <input type="text" name="apelido2" value="" placeholder="Apelido">&nbsp;&nbsp;
      <input type="email" name="email2" value="" placeholder="Email" >&nbsp;&nbsp;
      <select name='select2'>
        <option value="Docente">Docente</option>
        <option value="Aluno" selected>Aluno</option>
      </select>&nbsp;&nbsp;
      <input type="number" name="numcartao2" value="" placeholder="Numero do Cartão">&nbsp;&nbsp;
      <input type="date" class="today" name="data2" value="" placeholder="Data">
      </p>
    </div>
    <div>
      <p style="text-align:center;">Cartão 3:&nbsp;&nbsp;
      <input type="number" name="numidentificacao3" value="" placeholder="Numero do Aluno">&nbsp;&nbsp;
      <input type="text" name="nome3" value="" placeholder="Nome">&nbsp;&nbsp;
      <input type="text" name="apelido3" value="" placeholder="Apelido">&nbsp;&nbsp;
      <input type="email" name="email3" value="" placeholder="Email" >&nbsp;&nbsp;
      <select name='select3'>
        <option value="Docente">Docente</option>
        <option value="Aluno" selected>Aluno</option>
      </select>&nbsp;&nbsp;
      <input type="number" name="numcartao3" value="" placeholder="Numero do Cartão">&nbsp;&nbsp;
      <input type="date" class="today" name="data3" value="" placeholder="Data">
      </p>
    </div>
    <div>
      <p style="text-align:center;">Cartão 4:&nbsp;&nbsp;
      <input type="number" name="numidentificacao4" value="" placeholder="Numero do Aluno">&nbsp;&nbsp;
      <input type="text" name="nome4" value="" placeholder="Nome">&nbsp;&nbsp;
      <input type="text" name="apelido4" value="" placeholder="Apelido">&nbsp;&nbsp;
      <input type="email" name="email4" value="" placeholder="Email" >&nbsp;&nbsp;
      <select name='select4'>
        <option value="Docente">Docente</option>
        <option value="Aluno" selected>Aluno</option>
      </select>&nbsp;&nbsp;
      <input type="number" name="numcartao4" value="" placeholder="Numero do Cartão">&nbsp;&nbsp;
      <input type="date" class="today" name="data4" value="" placeholder="Data">
        </p>
    </div>
    <div>
      <p style="text-align:center;">Cartão 5:&nbsp;&nbsp;
      <input type="number" name="numidentificacao5" value="" placeholder="Numero do Aluno">&nbsp;&nbsp;
      <input type="text" name="nome5" value="" placeholder="Nome">&nbsp;&nbsp;
      <input type="text" name="apelido5" value="" placeholder="Apelido">&nbsp;&nbsp;
      <input type="email" name="email5" value="" placeholder="Email" >&nbsp;&nbsp;
      <select name='select5'>
        <option value="Docente">Docente</option>
        <option value="Aluno" selected>Aluno</option>
      </select>&nbsp;&nbsp;
      <input type="number" name="numcartao5" value="" placeholder="Numero do Cartão">&nbsp;&nbsp;
      <input type="date" class="today" name="data5" value="" placeholder="Data">
    </p>
    </div>
    <div>
      <p style="text-align:center;">Cartão 6:&nbsp;&nbsp;
      <input type="number" name="numidentificacao6" value="" placeholder="Numero do Aluno">&nbsp;&nbsp;
      <input type="text" name="nome6" value="" placeholder="Nome">&nbsp;&nbsp;
      <input type="text" name="apelido6" value="" placeholder="Apelido">&nbsp;&nbsp;
      <input type="email" name="email6" value="" placeholder="Email" >&nbsp;&nbsp;
      <select name='select6'>
        <option value="Docente">Docente</option>
        <option value="Aluno" selected>Aluno</option>
      </select>&nbsp;&nbsp;
      <input type="number" name="numcartao6" value="" placeholder="Numero do Cartão">&nbsp;&nbsp;
      <input type="date" class="today" name="data6" value="" placeholder="Data">
      </p>
    <div>
      <p style="text-align:center;">Cartão 7:&nbsp;&nbsp;
      <input type="number" name="numidentificacao7" value="" placeholder="Numero do Aluno">&nbsp;&nbsp;
      <input type="text" name="nome7" value="" placeholder="Nome">&nbsp;&nbsp;
      <input type="text" name="apelido7" value="" placeholder="Apelido">&nbsp;&nbsp;
      <input type="email" name="email7" value="" placeholder="Email" >&nbsp;&nbsp;
      <select name='select7'>
        <option value="Docente">Docente</option>
        <option value="Aluno" selected>Aluno</option>
      </select>&nbsp;&nbsp;
      <input type="number" name="numcartao7" value="" placeholder="Numero do Cartão">&nbsp;&nbsp;
      <input type="date" class="today" name="data7" value="" placeholder="Data">
      </p>
    </div>
    <div>
      <p style="text-align:center;">Cartão 8:&nbsp;&nbsp;
      <input type="number" name="numidentificacao8" value="" placeholder="Numero do Aluno">&nbsp;&nbsp;
      <input type="text" name="nome8" value="" placeholder="Nome">&nbsp;&nbsp;
      <input type="text" name="apelido8" value="" placeholder="Apelido">&nbsp;&nbsp;
      <input type="email" name="email8" value="" placeholder="Email" >&nbsp;&nbsp;
      <select name='select8'>
        <option value="Docente">Docente</option>
        <option value="Aluno" selected>Aluno</option>
      </select>&nbsp;&nbsp;
      <input type="number" name="numcartao8" value="" placeholder="Numero do Cartão">&nbsp;&nbsp;
      <input type="date" class="today" name="data8" value="" placeholder="Data">
      </p>
    </div>
    <div>
      <p style="text-align:center;">Cartão 9:&nbsp;&nbsp;
      <input type="number" name="numidentificacao9" value="" placeholder="Numero do Aluno">&nbsp;&nbsp;
      <input type="text" name="nome9" value="" placeholder="Nome">&nbsp;&nbsp;
      <input type="text" name="apelido9" value="" placeholder="Apelido">&nbsp;&nbsp;
      <input type="email" name="email9" value="" placeholder="Email" >&nbsp;&nbsp;
      <select name='select9'>
        <option value="Docente">Docente</option>
        <option value="Aluno" selected>Aluno</option>
      </select>&nbsp;&nbsp;
      <input type="number" name="numcartao9" value="" placeholder="Numero do Cartão">&nbsp;&nbsp;
      <input type="date" class="today" name="data9" value="" placeholder="Data">
        </p>
    </div>
    <div>
      <p style="text-align:center;">Cartão 10:&nbsp;&nbsp;
      <input type="number" name="numidentificacao10" value="" placeholder="Numero do Aluno">&nbsp;&nbsp;
      <input type="text" name="nome10" value="" placeholder="Nome">&nbsp;&nbsp;
      <input type="text" name="apelido10" value="" placeholder="Apelido">&nbsp;&nbsp;
      <input type="email" name="email10" value="" placeholder="Email" >&nbsp;&nbsp;
      <select name='select10'>
        <option value="Docente">Docente</option>
        <option value="Aluno" selected>Aluno</option>
      </select>&nbsp;&nbsp;
      <input type="number" name="numcartao10" value="" placeholder="Numero do Cartão">&nbsp;&nbsp;
      <input type="date" class="today" name="data10" value="" placeholder="Data">
    </p>
    </div>
<center>

<?php
  //Adicionar mais linhas de inserção
  if(isset($_POST['colocar'])){
    $soma=0;
    for ($i=0; $i < $_POST['linhas']; $i++) {
      $linhas = $_POST['linhas'];
      $soma++;
      $ppp=$i+11; 
      echo "<div>";
      echo '<p style="text-align:center;">Cartão '.$ppp.':&nbsp;&nbsp;';
      echo '<input type="number" name="numidentificacao'.$ppp.'" value="" placeholder="Numero do Aluno">&nbsp;&nbsp;&nbsp;';
      echo '<input type="text" name="nome'.$ppp.'" value="" placeholder="Nome">&nbsp;&nbsp;&nbsp;';
      echo '<input type="text" name="apelido'.$ppp.'" value="" placeholder="Apelido">&nbsp;&nbsp;&nbsp;';
      echo ' <input type="email" name="email'.$ppp.'" value="" placeholder="Email" >&nbsp;&nbsp;';
      echo '<select name="select'.$ppp.'">';
      echo '<option value="docente">Docente</option>';
      echo '<option value="aluno" selected>Aluno</option>';
      echo '</select>&nbsp;&nbsp;';
      echo '<input type="number" name="numcartao'.$ppp.'" value="" placeholder="Numero do Cartão">&nbsp;&nbsp;&nbsp;';
      echo '<input type="date" name="data'.$ppp.'" value="" id="today" placeholder="Data">&nbsp;';
      echo "</p>";
      echo "</div>";
    }
    $glo = $soma; 
}
  //Inserção dos dados
  if(isset($_POST['inserir'])){
    for ($i=1; $i <= $_POST['linhas'] + 10; $i++) { 

      //Verificar se os campos estão vazios
      if($_POST['numidentificacao'.$i]=='' && $_POST['numcartao'.$i]=='' && $_POST['nome'.$i]=='' && $_POST['apelido'.$i]=='' && $_POST['email'.$i]==''){
        $inutil = 1;
      }

      //Verificar se em alguma linha houve um campo não preenchido
      elseif($_POST['numidentificacao'.$i]=='' || $_POST['numcartao'.$i]=='' || $_POST['nome'.$i]=='' || $_POST['apelido'.$i]=='' || $_POST['email'.$i]=='' || $_POST['data'.$i]=='' || $_POST['select'.$i]==''){ 
        $msg11 = "<h3 class='erro'>Aviso: Você esqueceu-se de preencher campos no Cartão".$i.": &nbsp; ".$_POST['numidentificacao'.$i]." &nbsp; // &nbsp;  ".$_POST['numcartao'.$i]." &nbsp; // &nbsp; ".$_POST['nome'.$i]." &nbsp; // &nbsp; ".$_POST['apelido'.$i]." &nbsp; // &nbsp; ".$_POST['email'.$i]." &nbsp; // &nbsp; ".$_POST['select'.$i]." &nbsp; // &nbsp; ".$_POST['data'.$i]." &nbsp;//</h3>";
       }

      //Inserção
      else{   
        $qr = "INSERT INTO tbl_cartao(numidentificacao,numcartao,nome,apelido,Email,perfil,Data) VALUES(?,?,?,?,?,?,?)";       
        $ordem = $ms->prepare($qr);
        $ordem->bind_param('iisssss', $_POST["numidentificacao".$i], $_POST["numcartao".$i], $_POST["nome".$i], $_POST["apelido".$i], $_POST["email".$i], $_POST["select".$i], $_POST["data".$i]);
        if ($ordem->execute() && $ordem->affected_rows>0){
          $msg='<h3 class="sucesso">Os dados foram inseridos com sucesso!</h3>';
          $numidentificacao=$_POST["numidentificacao".$i];
          $numcartao=$_POST["numcartao".$i];
          $nome=$_POST["nome".$i];
          $apelido = $_POST["apelido".$i];
          $email = $_POST["email".$i];
          $perfil = $_POST["select".$i];
          $data = $_POST["data".$i];
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
        if ($msg11 == "") {
          $inutil = 1;
        }
        else{
          echo $msg11;
        }
        $msg11 = "";
      }
      echo $msg;      
}
?>

</center>
</form>
<p id="a"> Inserir mais linhas: <?php echo '<input type="text" name="linhas" value="'.$glo.'">' ?>&nbsp;&nbsp;<button name="colocar" style="background-color: orange; color: white;height: 27px; width: 70px;">Colocar</button></p>
<p id="date"></p>
<a id="send-email" href=""><button id="b" style="background-color: orange; color: white;" name="inserir">Inserir</button></a>
</body>
</html>