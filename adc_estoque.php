<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Adicionar Livro ao Estoque</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/CRUD_estoque.css">
    </head>
    <body>
        <div id="sideDiv"></div>
        <div>
            <h1>Adicionar livro ao estoque:</h1>
            <form action="adc_sucesso_estoque.php" method="post">
                ID: <br>
                Título: <input type="text" name="titulo" id="titulo"> <br>
                Funcionário: <input type="text" name="funcionario" id="funcionario"> <br>
                Quatidade Recebida: <input type="number" name="qr" id="qr" step="1"> <br>
                Quatidade Total: <input type="number" name="qt" id="qt" step="1"> <br>
                <button type="submit" id="botao">Enviar Dados</button>
            </form>
        </div>
        <div id="container-back">
                <a href="plan_estoque.php"><img src="estilos/back.png" alt="back_btn" id="back"></a>
        </div>
    </body>
</html>