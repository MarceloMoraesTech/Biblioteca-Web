
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Alteração Dados de Fornecedores</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="estilos/sucesso_fornec.css">
    </head>
    <body>
        <div id="container">
            <?php

            $id = 
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $cidade = $_POST['cidade'];

            if ($nome=="" or $endereco=="" or $cidade=="" or $telefone=="" )
            print("<p>Faltou preencher algum campo...</p>");
            else
                {
                require("conecta.inc.php");
                $ok = $conn or die ("<p>Não é possível conectar-se ao servidor.</p>");
                mysqli_query($ok, "insert into fornecedores (nome, endereco, cidade, telefone) values ('$nome', '$endereco', '$cidade', '$telefone');") or die
                ("<p>Não é possível inserir fornecedores!</p>");
                print("<h1>Dados inseridos com sucesso!</h1><br>");
                print("<p>ID: <br>");
                print("Empresa: $nome <br>");
                print("Endereço: $endereco <br>");
                print("Telefone: $telefone <br>");
                print("Cidade: $cidade<br></p>");
                }   
            ?>            
            <div id="back">
                <button id="botao"> <a href="plan_fornec.php">Voltar para planilha</a> </button>
            </div>
        </div>
    </body>
</html>

