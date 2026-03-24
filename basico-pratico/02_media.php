<?php
    $nota1 = 5;
    $nota2 = 9;
    $nota3 = 7;

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if($media >= 7) {
        echo 'Aprovado';
    }elseif($media >= 5 and $media < 7){
        echo 'Em recuperação';
    }else{
        echo 'Reprovado';
    }


?>