<?php
    $nota1 = 5.0;
    $nota2 = 9.0;
    $nota3 = 7.0;

    $media = ($nota1 + $nota2 + $nota3) / 3;
    $mediaFormatada =  number_format($media,2);
    if($media >= 7) {
        $situacao = 'Aprovado';
    }elseif($media >= 5 and $media < 7){
        $situacao = 'Em recuperação';
    }else{
        $situacao = 'Reprovado';
    }


?>

<!DOCTYPE html>
    <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <title>Calculo da Idade</title>
        </head>
        <body>
            <?php 
                echo "Aluno está $situacao, Média: $mediaFormatada";
            ?>
        </body>
    </html>