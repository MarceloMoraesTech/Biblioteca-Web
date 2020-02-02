<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Alteração Dados de Funcionário</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/CRUD_func.css">
    </head>
    <body>
        <div id="sideDiv"></div>
        <div>
            <?php
                $id=$_GET['id'];
                require("conecta.inc.php");
                $ok = $conn or die ("Não é possível conectar-se ao servidor.");
                $result=mysqli_query($ok, "select * from funcionarios where idfuncionarios='$id'") or die ("Não é possível retornar dados do amigo!");
                $linha=mysqli_fetch_array($result);
                $id=$linha["idfuncionarios"];
                $nome=$linha["nome"];
                $contratacao=$linha["datacontratacao"];
                print("<h1>Alterando os dados do func:</h1><p>");?>
                <form action="alt_sucesso_func.php" method="get">
                Código: <?php print($id)?>
                <input type="hidden" name="id_alter" value="<?php print($id)?>">
                <br>Nome: <input type="text" name="nome_alter" value="<?php
                print($nome)?>" id="nome">
                <br>Data Contratação: <input type="date" name="date_alter" value="<?php
                print($contratacao)?>"  id="contratacao">
                <p><button type="submit" id="botao">Alterar Dados</button>
                </form>
        </div>
        <div id="container-back">
                <a href="plan_func.php"><img src="estilos/back.png" alt="back_btn" id="back"></a>
        </div>
    </body>
</html>

