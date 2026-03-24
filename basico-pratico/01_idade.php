<?php
    $nome = 'thiago';
    $dataNascimento = new DateTime("2007-07-08");
    $dataAtual = new DateTime();
    $curso = 'Desenvolvimento de sistemas';

    $idade = $dataAtual->diff($dataNascimento);
    
    echo "Nome: $nome <br>";
    echo "Idade: $idade->y <br>";
    echo "Curso: $curso";

?>