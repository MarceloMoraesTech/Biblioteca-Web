<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Alteração Dados de Fornecedor</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/CRUD_fornec.css">
    </head>
    <body>
        <div id="sideDiv"></div>
        <div>
            
            <?php
                $id=$_GET['id'];
                require("conecta.inc.php");
                $ok = $conn or die ("Não é possível conectar-se ao servidor.");
                $result=mysqli_query($ok, "select * from fornecedores where idfornecedores='$id'") or die ("Não é possível retornar dados do amigo!");
                $linha=mysqli_fetch_array($result);
                $id=$linha["idfornecedores"];
                $nome=$linha["nome"];
                $endereco=$linha["endereco"];
                $cidade=$linha["cidade"];
                $telefone=$linha["telefone"];
                print("<h1>Alterando os dados do fornecedor:</h1><p>");?>
                <form action="alt_sucesso_fornec.php" method="get">
                Código: <?php print($id)?>
                <input type="hidden" name="id_alter" value="<?php print($id)?>">
                <br>Nome: <input type="text" name="nome_alter" value="<?php
                print($nome)?>" id="nome">
                <br>Endereço: <input type="text" name="endereco_alter" value="<?php
                print($endereco)?>"  id="endereco">
                <br>Cidade: <input type="text" name="cidade_alter" value="<?php
                print($cidade)?>" id="cidade">
                <br>Telefone: <input type="tel" name="telefone_alter" value="<?php
                print($telefone)?>" id="telefone">
                <p><button type="submit" id="botao">Alterar Dados</button>
                </form>

        </div>
        <div id="container-back">
                <a href="plan_fornec.php"><img src="estilos/back.png" alt="back_btn" id="back"></a>
        </div>
    </body>
</html>