<?php

    if(isset($_POST["nome"])){

        $nome = $_POST["nome"];
        $dataAtual = new DateTime();
        $dataNascimento = new DateTime($_POST["dataNascimento"]);
        $curso = $_POST["curso"];

        $idade = $dataAtual->diff($dataNascimento);

        echo "Nome: $nome <br>";
        echo "Curso: $curso <br>";
        echo "$idade->y anos/ $idade->m meses/ $idade->d dias <br>";

        echo '<a href="01_idade.html">Voltar</a>';
    }else{
        echo 'Acesso Inválido';
    }
?>