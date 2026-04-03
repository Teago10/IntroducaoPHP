<?php

        if(isset($_POST["nome"])){

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];

            echo "<h2>Dados Cadastrados</h2>";
            echo "Nome: $nome <br>";
            echo "Email: $email <br>";
            echo "Telefone: $telefone <br>";

        echo '<a href="03_tiposdados.html">Voltar</a>';
        }else{
            echo 'Acesso inválido';
        }

?>