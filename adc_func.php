<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Adicionar funcionário</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/CRUD_func.css">
    </head>
    <body>
        <div id="sideDiv"></div>
        <div>
            <h1>Adicionar funcionário:</h1>
            <form action="adc_func.inc.php" method="POST">
                ID: <br>
                Nome: <input type="text" name="nome" id="nome"> <br>
                Data de Contratação: <input type="date" name="contratacao" id="contratação"> <br>
                <button type="submit" id="botao">Enviar Dados</button>
            </form>
        </div>
        <div id="container-back">
                <a href="plan_func.php"><img src="estilos/back.png" alt="back_btn" id="back"></a>
        </div>
    </body>
</html>