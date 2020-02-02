<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Alterar Dados dos Fornecedores</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/sucesso_fornec.css">
    </head>
    <body>
        <div id="container">
        <?php
                $id=$_GET['id_alter'];
                $nome_alter=$_GET['nome_alter'];
                $endereco_alter=$_GET['endereco_alter'];
                $cidade_alter=$_GET['cidade_alter'];
                $telefone_alter=$_GET['telefone_alter'];
                require("conecta.inc.php");
                $ok = $conn or die ("Não é possível conectar-se ao servidor.");
                print("<h1>Dados alterados com sucesso!</h1>");
                print("<p><br>ID: $id <br>");
                print("Nome: $nome_alter<br>");
                print("Endereço: $endereco_alter</p><br>");
                print("Cidade: $cidade_alter</p><br>");
                print("Telefone: $telefone_alter</p><br>");
                mysqli_query($ok, "update fornecedores set nome='$nome_alter',
                endereco='$endereco_alter', cidade='$cidade_alter', telefone='$telefone_alter' where idfornecedores='$id'") or die ("Não é possível alterar dados do fornecedor!");
            ?>
            <div id="back">
                <button id="botao"><a href="plan_fornec.php">Voltar para planilha</a></button>
            </div>  
        </div>
        </div>
    </body>
</html>