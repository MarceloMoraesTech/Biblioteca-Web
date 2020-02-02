<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Livraria</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Bitter&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/consultar.css">

    </head>
    <body>
        <div id="container-in">
            <h1>Consultar em Estoque:</h1>
            <form action="resposta_estoque.php" method="post">
                Título: <input type="text" id="titulo"><br>
                <button type="submit" id="pesquisar_titulo">Pesquisar</button>
            </form>
            <form action="resposta_estoque.html" method="post">
                Funcionário: <input type="text" id="funcionario">
                <button type="submit" id="pesquisar_funcionario">Pesquisar</button>
            </form>
        </div>
        <div id="container-back">
                <a href="plan_estoque.php"><img src="estilos/back.png" alt="back_btn" id="back"></a>
        </div>
        
    </body>
</html>