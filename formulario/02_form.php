<?php

        if(isset($_POST["nome"])){

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        echo "<h2>Dados recebidos</h2>";
        echo "Nome: ".$nome."<br>";
        echo "Idade: ".$idade."<br><br>";

        echo '<a href="02_form.html">Voltar</a>';
        }else{
            echo 'Acesso inválido';
        }
    ?>