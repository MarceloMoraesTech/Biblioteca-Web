
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Alteração Dados de Funcionário</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="estilos/sucesso_func.css">
    </head>
    <body>
        <div id="container">
            <?php

            $id = 
            $nome = $_POST['nome'];
            $contratacao = $_POST['contratacao'];

            if ($nome=="" or $contratacao=="")
            print("<p>Faltou preencher algum campo...</p>");
            else
                {
                require("conecta.inc.php");
                $ok = $conn or die ("<p>Não é possível conectar-se ao servidor.</p>");
                mysqli_query($ok, "insert into funcionarios (nome, datacontratacao) values ('$nome', '$contratacao');") or die
                ("<p>Não é possível inserir funcionário!</p>");
                print("<h1>Dados inseridos com sucesso!</h1><br>");
                print("<p>ID: <br>");
                print("Nome: $nome <br>");
                print("Data de Contratação: $contratacao<br></p>");
                }   
            ?>            
            <div id="back">
                <button id="botao"> <a href="plan_func.php">Voltar para planilha</a> </button>
            </div>
        </div>
    </body>
</html>

