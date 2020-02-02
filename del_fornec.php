<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Deletar Livro do Estoque</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/del_fornec.css">
    </head>
    <body>
        <div id="container">
        <?php
            $id=$_GET['id'];
            require("conecta.inc.php");
            $ok = $conn or die ("Não é possível conectar-se ao servidor.");
            $result=mysqli_query($ok, "select * from fornecedores where
            idfornecedores='$id'") or die ("Não é possível retornar dados do amigo!");
            $linha=mysqli_fetch_array($result);
            $id=$linha["idfornecedores"];
            $nome=$linha["nome"];
            $endereco=$linha["endereco"];
            $cidade=$linha["cidade"];
            $telefone=$linha["telefone"];
            print("<h1>Deletando o fornecedor:</h1><p>");
            print("<p>ID: $id<br>");
            print("Nome: $nome<br>");
            print("Endereço: $endereco<br></p>");
            print("Cidade: $cidade<br></p>");
            print("Telefone: $telefone<br></p>");
            ?>
            <form action="del_sucesso_fornec.php" method="get">
            <input type="hidden" name="id_del" value="<?php print($id)?>">
            <br><button type="submit" id="botao">Deletar Dados</button>
            </form>

            <div id="container-back">
                    <a href="plan_fornec.php"><img src="estilos/back.png" alt="back_btn" id="back"></a>
            </div>

        </div>    
    </body>
</html>