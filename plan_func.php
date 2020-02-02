<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Planilha Funcionários</title>
        <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/plan_func.css">
    </head>
    <body>
        <div id="background-head"></div>
        <div id="container">
            <h1>Funcionários</h1>
            <?php
                require("conecta.inc.php");
                $ok = $conn or die ("Não é possível conectar-se ao servidor.");
                $resultado=mysqli_query($ok, "Select * from funcionarios;");
                print("<table>");
                print("<tr><th id='id'>ID</th>");
                print("<th id='nomeCompleto'>Nome Completo</th>");
                print("<th id='ano'>Ano Contratação</th>");
                print("<th id='botao'></th>");
                print("<th id='botao'></th>");
                while ($linha=mysqli_fetch_array($resultado))
                {
                    $id=$linha["idfuncionarios"];
                    $nome=$linha["nome"];
                    $contratacao=$linha["datacontratacao"];
                    
                    print("<tr><td>$id</td>");
                    print("<td class='nome'>$nome</td>");
                    print("<td>$contratacao</td>");
                    print("<td><a href='del_func.php?id=$id'>Deletar</a></td>");
                    print("<td><a href='CRUD_func.php?id=$id'>Alterar</a></td></tr>");

                }
                print("</table>");
                ?>
        </div>
        <div id="container-back">
            <a href="menu_alterar.html"><img src="estilos/back.png" alt="back_btn" id="back"></a>
            <a href="adc_func.php"><img src="estilos/add.png" alt="add_btn" id="add"></a>
        </div>
    </body>
</html>