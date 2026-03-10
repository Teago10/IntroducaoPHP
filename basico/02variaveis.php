<?php 

    $nome = "Carlos"; 
    $idade = 18; 
    $cidade = 'Marília'; 
    $curso = 'Desenvolvimento de Sistemas';

?>

<!DOCTYPE html>
    <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <title>Curso de PHP</title>
        </head>
        <body>
            <?php
                echo "<br>Nome: $nome";
                echo "<br>Idade: $idade";
                echo "<br>Cidade: $cidade";
                echo "<br>Curso: $curso"
            ?>
        </body>
    </html>