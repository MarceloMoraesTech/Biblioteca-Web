<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Deletar Funcionário</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/sucesso_func.css">
    </head>
    <body>
        <div id="container">
        <?php
            $id=$_GET['id'];
            require("conecta.inc.php");
            $ok = $conn or die ("Não é possível conectar-se ao servidor.");
            $result=mysqli_query($ok, "select * from funcionarios where
            idfuncionarios='$id'") or die ("Não é possível retornar dados do amigo!");
            $linha=mysqli_fetch_array($result);
            $id=$linha["idfuncionarios"];
            $nome=$linha["nome"];
            $contratacao=$linha["datacontratacao"];
            print("<h1>Deletando o funcionário:</h1><p>");
            print("<p>ID: $id<br>");
            print("Nome: $nome<br>");
            print("Data Contratação: $contratacao<br></p>");
            ?>
            <form action="del_sucesso_func.php" method="get">
            <input type="hidden" name="id_del" value="<?php print($id)?>">
            <br><button type="submit" id="botao">Deletar Dados</button>
            </form>

        </div>
    </body>
</html>