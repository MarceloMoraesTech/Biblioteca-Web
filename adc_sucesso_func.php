
<?php
        $nome = $_POST['nome'];
        $contratacao = $_POST['contratacao'];

        if ($nome=="" or $contratacao=="")
        print("Faltou preencher algum campo...");
        else
            {
            require("conecta.inc.php");
            $ok = $conn or die ("Não é possível conectar-se ao servidor.");
            print("Inserindo o funcionário:<p>");
            mysqli_query($ok, "insert into funcionarios (nome, datacontratacao) values ('$nome', '$contratacao');") or die
            ("Não é possível inserir funcionário!");
            print("Amigo inserido com sucesso: <b>$nome</b>");
            }   

?>