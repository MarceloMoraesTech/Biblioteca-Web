<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Alteração Dados de Livro</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/CRUD_livros.css">
    </head>
    <body>
        <div id="sideDiv"></div>
        <div>
            <h1>Alterando dados do livro:</h1>
            <form action="alt_sucesso_livros.php" method="post">
                ID: <br>
                Título: <input type="text" name="titulo" id="titulo"> <br>
                Editora: <input type="text" name="editora" id="editora"> <br>
                Ano de Publicação: <input type="number" name="ano" id="ano" step="1" > <br>
                Edição: <input type="number" name="edicao" id="edicao" step="1" > <br>                
                Fornecedor: <input type="text" name="fornecedor" id="fornecedor"> <br>
                <button type="submit" id="botao">Alterar Dados</button>
            </form>
        </div>
        <div id="container-back">
                <a href="plan_livros.php"><img src="estilos/back.png" alt="back_btn" id="back"></a>
        </div>
    </body>
</html>