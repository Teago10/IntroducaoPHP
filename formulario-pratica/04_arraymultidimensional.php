<?php

    $estados = [];

    if(isset($_POST["uf"], $_POST["estado"])){
        $estados[] = [strtoupper($_POST["uf"]), $_POST["estado"]];

        for($i = 0; $i < count($estados);$i++){
            echo "UF: {$estados[$i][0]},<br>  Estado: {$estados[$i][1]}";
        }

        echo '<br><a href="04_arraymultidimensional.html">Voltar</a>';
    }

?>