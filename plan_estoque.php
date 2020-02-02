<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Planilha Estoque</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/plan_estoque.css">
    </head>
    <body>
        <div id="background-head"></div>
        <div id="container">
            <h1>Estoque</h1>
            <table>
                <tr>
                    <th id="id">ID</th>
                    <th id="titulo">Título</th>
                    <th id="funcionario">Funcionário</th>
                    <th id="qt">Q(t)</th>
                    <th id="qr">Q(r)</th>
                    <th id="atualizacao">Atualição</th>
                    <th class="botao"></th>
                    <th class="botao"></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="nome">O Senhor dos Anéis</td>
                    <td class="nome">Nadine Zíngano</td>
                    <td>20</td>
                    <td>2</td>
                    <td>10/11/2019</td>
                    <td><a href="CRUD_estoque.php">Alterar</a></td>
                    <td><a href="del_estoque.php">Deletar</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="nome">Harry Potter e a Ordem da Fênix</td>
                    <td class="nome">Salem Zíngano</td>
                    <td>10</td>
                    <td>15</td>
                    <td>1/11/2019</td>
                    <td><a href="CRUD_estoque.html">Alterar</a></td>
                    <td><a href="del_estoque.html">Deletar</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="nome">Watchmen</td>
                    <td class="nome">Nadine Zíngano</td>
                    <td>20</td>
                    <td>4</td>
                    <td>2/7/2019</td>
                    <td><a href="CRUD_estoque.html">Alterar</a></td>
                    <td><a href="del_estoque.html">Deletar</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="nome">Jane Eyre</td>
                    <td class="nome">Iggy Pop Zíngano</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1/1/2019</td>
                    <td><a href="CRUD_estoque.html">Alterar</a></td>
                    <td><a href="del_estoque.html">Deletar</a></td>
                </tr>
            </table>
        </div>
        <div id="container-back">
            <a href="menu_alterar.html"><img src="estilos/back.png" alt="back_btn" id="back"></a>
            <a href="adc_estoque.php"><img src="estilos/add.png" alt="add_btn" id="add"></a>
            <button id="botao"><a href="consultar_estoque.php" id="botao">Consultar</a> </button>
        </div>
    </body>
</html>