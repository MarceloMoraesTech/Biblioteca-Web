<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Deletar Funcionário</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos/del_func.css">
    </head>
    <body>
        <div id="container">

            <?php
                $id=$_GET['id_del'];
                require("conecta.inc.php");
                $ok = $conn or die ("Não é possível conectar-se ao
                servidor.");
                mysqli_query($ok, "delete from funcionarios where idfuncionarios='$id'") or
                die ("<h1>Não é possível deletar<br> funcionários<br> que cadastraram livros!</h1>");
                print("<h1>Funcionário deletado <br> com sucesso (ID): $id</h1>");
           
            ?>

            <div id="container-back">
                    <a href="plan_func.php"><img src="estilos/back.png" alt="back_btn" id="back"></a>
            </div>

        </div>    
    </body>
</html>