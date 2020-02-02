<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Planilha Livros</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/plan_livros.css">
    </head>
    <body>
            <div id="background-head"></div>
            <div id="container">
                <h1>Livros</h1>
                <table>
                    <tr>
                        <th id="id">ID</th>
                        <th id="titulo">Título</th>
                        <th id="editora">Editora</th>
                        <th id="ano">Ano</th>
                        <th id="edicao">Edição</th>
                        <th id="fornecedor">Fornecedor</th>
                        <th class="botao"></th>
                        <th class="botao"></th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td class="nome">O Senhor dos Anéis</td>
                        <td class="nome">Harper Collins</td>
                        <td>1987</td>
                        <td>1a</td>
                        <td>Americanas</td>
                        <td><a href="CRUD_livros.php">Alterar</a></td>
                        <td><a href="del_livro.php">Deletar</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="nome">Harry Potter e a Ordem da Fênix</td>
                        <td class="nome">Rocco</td>
                        <td>1996</td>
                        <td>3a</td>
                        <td>Americanas</td>
                        <td><a href="CRUD_livros.html">Alterar</a></td>
                        <td><a href="del_livro.html">Deletar</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="nome">Watchmen</td>
                        <td class="nome">DC Comics</td>
                        <td>1985</td>
                        <td>13a</td>
                        <td>Americanas</td>
                        <td><a href="CRUD_livros.html">Alterar</a></td>
                        <td><a href="del_livro.html">Deletar</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td class="nome">Jane Eyre</td>
                        <td class="nome">Penguin</td>
                        <td>1847</td>
                        <td>110a</td>
                        <td>Americanas</td>
                        <td><a href="CRUD_livros.html">Alterar</a></td>
                        <td><a href="del_livro.html">Deletar</a></td>
                    </tr>
                </table>
            </div>
            <div id="container-back">
                <a href="menu_alterar.html"><img src="estilos/back.png" alt="back_btn" id="back"></a>
                <a href="adc_livro.php"><img src="estilos/add.png" alt="add_btn" id="add"></a>
                <button id="botao"><a href="consultar_livros.php" id="botao">Consultar</a> </button>
            </div>
        </body>
</html>