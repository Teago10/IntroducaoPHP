<?php

    if(isset($_POST["nota1"])){

        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];

        $total = $nota1 + $nota2 + $nota3;
        $media = $total / 3;

        if($media >=7){
            echo'Aprovado';
        }elseif($media >= 5 ){
            echo 'Em Recuperação';
        }else{
            echo 'Reprovado';
        }

        echo '<br><br><a href="02_media.html">Voltar</a>';
    }else{
        echo 'Acesso Inválido';
    }

?>