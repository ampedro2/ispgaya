<!-- Verificação do login -->
<?php include('../Includes/verificalogin.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Consulta</title>
    <link href="../CSS/consultacss.css" type="text/css" rel="stylesheet">
</head>

<?php
    //Definição das variáveis e das credenciais da base de dados
    $nomesomaencontrado=0;
    $output = '';
    $listanome= array();
    $xnumidentificacao='';
    $xnome='';
    $xnumcartao='';
    $msg="";
    $msg1="";
    include('../Includes/config.php');
?>

<body>
    <img style="cursor: pointer;" onclick="window.location.href='menu.php'" src="../Imagens/ispgayalogo.png">
    <button onclick="window.location.href='menu.php'" id="c" style="background-color: orange; color: white; margin: right;" name="menu">Voltar ao menu</button><br>
    <div id="div1">
        <form action="" target="_self" method="post">
        <h1>Pesquisa de Cartão</h1>
        <a>Pesquisar por:</a><br><br>
        <select name="select" class="select-css">
            <option <?php if ($xnome == $xnumcartao) {
                echo 'selected';
            } ?> value="Número de Identificação">Número de Indentificação</option>
            <option <?php if ($xnome == $xnumidentificacao) {
                echo 'selected';
            } ?> value="Número de Cartão">Número de Cartão</option>
            <option <?php if ($xnumidentificacao == $xnumcartao) {
                echo 'selected';
            } ?> value="Nome">Nome</option>
        </select><br>
        <input type="text" <?php echo 'value = "'.$xnumidentificacao, $xnumcartao, $xnome.'"' ?> style="width: 300px ;height:20px;background-color: #D8D8D8" name="num">
        <input type="number" <?php echo 'value = "'.$xnumidentificacao, $xnumcartao, $xnome.'"' ?> hidden="true" name="auxiliar">
        <center>
        <br>
        <button type="submit" name="pesq" style="font-family: Lucida Sans Unicode; background-color: orange; color: white; width: 300px; height: 35px;">Consultar</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        </center>
    </div><br><br>
    <center>

<?php
    if (isset($_POST['pesq']) && $_POST['select']=='Número de Identificação')
            {   
                $_SESSION['yyy']=0;
                $_SESSION['boxnumidentificacao']=0;
                if($_POST['num']==''){
                    $msg='<h3 class="erro">ERRO, tem de preencher o campo número';
                }

                else
                {
                    $qr = "select * from tbl_cartao where numidentificacao=?";       
                $ordem = $ms->prepare($qr);             
                $ordem->bind_param('s', $_POST["num"]);
                $ordem->execute();  
                $ordem->bind_result($numidentificacao, $numcartao, $nome, $apelido, $email, $perfil, $data, $entregue);

                if($ordem->fetch()){
                    $_SESSION['xxx']=0;
                    $_SESSION['yyy']=1;
                    $_SESSION['zzz']=0;
                    echo "<table class='content-table'><thead><tr><th>Número de Identificação</th><th>Número de Cartão</th><th>Nome</th><th>Email</th><th>   Perfil   </th><th>Data de Entrega</th><th>Entregue?</th></thead><tbody>";
                    echo "<tr><td>" . $numidentificacao . "</td><td> " . $numcartao . "</td><td> " . $nome . "&nbsp;" . $apelido . "</td><td> " . $email . "</td><td> " . $perfil . "</td><td> " . $data . "</td>";
                    if($entregue == "Nao"){
                    echo "<td><input type='checkbox' id='checkbox' value='0' name='checkbox'> </td></tr>";
                    }
                    if($entregue == "Sim"){
                    echo "<td><input type='checkbox' name='checkbox' id='checkbox' value='1' checked></td></tr>";
                    }

                }

                
                $xnumidentificacao = $numidentificacao;
                $xnumcartao = '';
                $xnome = '';
                if($_SESSION['yyy']==0){
                    $msg='<h3 class="erro">Erro, Não existe esse Número de Identificação!</h3>';
                }
                else{
                    echo "</tbody></table>";
                    echo '<button type="submit" name="verificarentregue" style="font-family: Lucida Sans Unicode; background-color: orange; color: white; width: 400px; height: 35px;">Confirmar entregas de Cartão</button>';
                }
                $_SESSION['boxnumidentificacao']=$numidentificacao;
                }
                $_SESSION['msg1']="";
        }
    
    else if (isset($_POST['pesq']) && $_POST['select']=='Número de Cartão')
        { 
            $_SESSION['zzz']=0;
            $_SESSION['boxnumcartao']=0;
            if($_POST['num']==''){
                $msg='<h3 class="erro">ERRO, tem de preencher o campo número';
            }

            else
            {
                $qr = "select * from tbl_cartao where numcartao=?";       
                $ordem = $ms->prepare($qr);             
                $ordem->bind_param('s', $_POST["num"]);
                $ordem->execute();  
                $ordem->bind_result($numidentificacao, $numcartao, $nome, $apelido, $email, $perfil, $data, $entregue);
                
                if($ordem->fetch()){
                    $_SESSION['xxx']=0;
                    $_SESSION['yyy']=0;
                    $_SESSION['zzz']=1;
                    echo "<table class='content-table'><thead><tr><th>Número de Identificação</th><th>Número de Cartão</th><th>Nome</th><th>Email</th><th>Perfil</th><th>Data de Entrega</th><th>Entregue?</th></thead><tbody>";
                    echo "<tr><td>" . $numidentificacao . "</td><td> " . $numcartao . "</td><td> " . $nome . "&nbsp;" . $apelido . "</td><td> " . $email . "</td><td> " . $perfil . "</td><td> " . $data . "</td>";
                    if($entregue == "Nao"){
                    echo "<td><input type='checkbox' id='checkbox' value='0' name='checkboxx'> </td></tr>";
                }
                    if($entregue == "Sim"){
                    echo "<td><input type='checkbox' name='checkboxx' id='checkbox' value='1' checked></td></tr>";
                    }
                    
                }
                
                echo "</tbody></table>";
                $xnumcartao = $numcartao;
                $xnumidentificacao = '';
                $xnome = '';
                if($_SESSION['zzz']==0){
                    $msg='<h3 class="erro">Erro, Não existe esse número de Cartão!</h3>';
                }
                else{
                    echo '<button type="submit" name="verificarentregue" style="font-family: Lucida Sans Unicode; background-color: orange; color: white; width: 400px; height: 35px;">Confirmar entregas de Cartão</button>';
                }
                $_SESSION['boxnumcartao'] = $numidentificacao;

            }
            $_SESSION['msg1']="";
        }

    else if (isset($_POST['pesq']) && $_POST['select']=='Nome')
        {
        $_SESSION['nomesomaencontrado'] = 0; 
        $_SESSION['listanome'] = array();      
        if($_POST['num']==''){
            $msg='<h3 class="erro">ERRO, tem de preencher o campo acima';
        }

        else
            {
            $qr = "select * from tbl_cartao where nome=?";       
            $ordem = $ms->prepare($qr);             
            $ordem->bind_param('s', $_POST["num"]);
            $ordem->execute();  
            $ordem->bind_result($numidentificacao, $numcartao, $nome, $apelido, $email, $perfil, $data, $entregue);
            $somaaaaaa=0;
            $_SESSION['xxx']=0;

            
            while($somaaaaaa<1000){
                if($ordem->fetch()){
                if($_SESSION['xxx']==0){
                    echo "<table class='content-table'><thead><tr><th>Número de Identificação</th><th>Número de Cartão</th><th>Nome</th><th>Email</th><th>Perfil</th><th>Data de Envio de Email</th><th>Entregue?</th></thead><tbody>";
                    $_SESSION['xxx']=1;
                    $_SESSION['yyy']=0;
                    $_SESSION['zzz']=0;
                }
                echo "<tr><td>" . $numidentificacao . "</td><td> " . $numcartao . "</td><td> " . $nome . "&nbsp;" . $apelido . "</td><td> " . $email . "</td><td> " . $perfil . "</td><td> " . $data . "</td>"; /*<td> " . $data . "</td></tr> */

                if($entregue == "Nao"){
                    echo "<td><input type='checkbox' id='checkbox' value='0' name='checkbox" . $_SESSION['nomesomaencontrado'] . "'> </td></tr>";
                }
                if($entregue == "Sim"){
                    echo "<td><input type='checkbox' name='checkbox" . $_SESSION['nomesomaencontrado'] . "' id='checkbox' value='1' checked></td></tr>";
                }
                $_SESSION['listanome'][$_SESSION['nomesomaencontrado']=$numidentificacao;
                $_SESSION['nomesomaencontrado']++;
            }

            $somaaaaaa++;
            }
           
            $xnome = $nome;
            $xnumcartao = '';
            $xnumidentificacao = '';
            if($_SESSION['xxx']==0){
                $msg='<h3 class="erro">Erro, Não existe esse Nome!</h3>';
            } 
            else{
                echo "</tbody></table>";
                echo '<button type="submit" name="verificarentregue" style="font-family: Lucida Sans Unicode; background-color: orange; color: white; width: 400px; height: 35px;">Confirmar entregas de Cartão</button>';
            }
            }
            $_SESSION['msg1']="";
        }

            if (isset($_POST['verificarentregue'])){
                if($_SESSION['xxx']==1){
                    
                    for ($i=0; $i < $_SESSION['nomesomaencontrado']; $i++) { 
                    if (isset($_POST['checkbox' . $i])) {
                        $qr = "update tbl_cartao set entregue='Sim' where numidentificacao=" . $_SESSION['listanome'][$i];
                        $ordem1 = $ms->prepare($qr);  
                        $ordem1 -> execute();
                        $ordem1->close();  
                        $msg1 = '<h3 class="sucesso">As alterações foram feitas com sucesso</h3>';       
                    } 
                    else{
                        $qr = "update tbl_cartao set entregue='Nao' where numidentificacao=" . $_SESSION['listanome'][$i];
                        $ordem1 = $ms->prepare($qr);  
                        $ordem1 -> execute();
                        $ordem1->close();    
                        $msg1 = '<h3 class="sucesso">As alterações foram feitas com sucesso</h3>';  
                    }
                }
                }
                if($_SESSION['yyy']==1){
                    if (isset($_POST['checkbox'])) {
                        $qr = "update tbl_cartao set entregue='Sim' where numidentificacao=" . $_SESSION['boxnumidentificacao'];
                        $ordem2 = $ms->prepare($qr);
                        $ordem2 -> execute();
                        $ordem2->close();
                        $msg1 = '<h3 class="sucesso">As alterações foram feitas com sucesso</h3>';                    
                    } 
                    else{
                        $qr = "update tbl_cartao set entregue='Nao' where numidentificacao=" . $_SESSION['boxnumidentificacao'];
                        $ordem2 = $ms->prepare($qr);  
                        $ordem2 -> execute();
                        $ordem2 -> close();
                        $msg1 = '<h3 class="sucesso">As alterações foram feitas com sucesso</h3>'; 
                    }
                }
                if($_SESSION['zzz']==1){
                    if (isset($_POST['checkboxx'])) {
                        $qr = "update tbl_cartao set entregue='Sim' where numidentificacao=" . $_SESSION['boxnumcartao'];
                        $ordem3 = $ms->prepare($qr);  
                        $ordem3 -> execute(); 
                        $ordem3->close();
                        $msg1 = '<h3 class="sucesso">As alterações foram feitas com sucesso</h3>';           
                    } 
                    else{
                        $qr = "update tbl_cartao set entregue='Nao' where numidentificacao=" . $_SESSION['boxnumcartao'];
                        $ordem3 = $ms->prepare($qr);  
                        $ordem3 -> execute();
                        $ordem3->close();    
                        $msg1 = '<h3 class="sucesso">As alterações foram feitas com sucesso</h3>'; 
                    }
                }
            }
        echo $msg;
        echo $msg1;
        ?>
</form>
<input type="hidden" name="sim" value="Sim">
</center>
</body>
</html>