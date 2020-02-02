<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Adicionar Fornecedor</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/CRUD_fornec.css">
    </head>
    <body>
        <div id="sideDiv"></div>
        <div>
            <h1>Adicionar fornecedor:</h1>
            <form action="adc_fornec.inc.php" method="post">
                ID: <br>
                Empresa: <input type="text" name="nome" id="empresa"> <br>
                Endereço: <input type="text" name="endereco" id="endereco"> <br>
                Telefone: <input type="tel" name="telefone" id="telefone"> <br>            
                Cidade: <input type="text" name="cidade" id="cidade"> <br>
                <button type="submit" id="botao">Enviar Dados</button>
            </form>
        </div>
        <div id="container-back">
                <a href="plan_fornec.php"><img src="estilos/back.png" alt="back_btn" id="back"></a>
        </div>
    </body>
</html>