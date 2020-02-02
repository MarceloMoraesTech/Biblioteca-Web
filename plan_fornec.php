<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Planilha Fornecedores</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/plan_fornec.css">
    </head>
    <body>
            <div id="background-head"></div>
            <div id="container">
                <h1>Fornecedores</h1>
                <?php
                require("conecta.inc.php");
                $ok = $conn or die ("Não é possível conectar-se ao servidor.");
                $resultado=mysqli_query($ok, "Select * from fornecedores;");
                print("<table>");
                print("<tr><th id='id'>ID</th>");
                print("<th id='nome'>Empresa</th>");
                print("<th id='endereco'>Endereço</th>");
                print("<th id='cidade'>Cidade</th>");
                print("<th id='telefone'>Telefone</th>");
                print("<th id='botao'></th>");
                print("<th id='botao'></th>");
                while ($linha=mysqli_fetch_array($resultado))
                {
                    $id=$linha["idfornecedores"];
                    $nome=$linha["nome"];
                    $endereco=$linha["endereco"];
                    $cidade=$linha["cidade"];
                    $telefone=$linha["telefone"];
                    
                    print("<tr><td>$id</td>");
                    print("<td class='nome'>$nome</td>");
                    print("<td class='nome'>$endereco</td>");
                    print("<td class='nome'>$cidade</td>");
                    print("<td class='nome'>$telefone</td>");
                    print("<td><a href='del_fornec.php?id=$id'>Deletar</a></td>");
                    print("<td><a href='CRUD_fornec.php?id=$id'>Alterar</a></td></tr>");

                }
                print("</table>");
                ?>

            </div>
            <div id="container-back">
                <a href="menu_alterar.html"><img src="estilos/back.png" alt="back_btn" id="back"></a>
                <a href="adc_fornec.php"><img src="estilos/add.png" alt="add_btn" id="add"></a>
            </div>
        </body>
</html>