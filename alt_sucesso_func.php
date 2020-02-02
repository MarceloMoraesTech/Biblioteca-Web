<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Alteração Dados de Funcionário</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/sucesso_func.css">
    </head>
    <body>
        <div id="container">
            <?php
                $id=$_GET['id_alter'];
                $nome_alter=$_GET['nome_alter'];
                $date_alter=$_GET['date_alter'];
                require("conecta.inc.php");
                $ok = $conn or die ("Não é possível conectar-se ao servidor.");
                print("<h1>Dados alterados com sucesso!</h1>");
                print("<p><br>ID: $id <br>");
                print("Nome: $nome_alter<br>");
                print("Data Contratação: $date_alter</p><br>");
                mysqli_query($ok, "update funcionarios set nome='$nome_alter',
                datacontratacao='$date_alter' where idfuncionarios='$id'") or die ("Não é possível alterar dados do funcionário!");
            ?>
            <div id="back">
                <button id="botao"> <a href="plan_func.php">Voltar para planilha</a> </button>
            </div>
        </div>
    </body>
</html>