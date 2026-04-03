<?php

    if(isset($_POST["horaEntrada"])){

        $horaEntrada = new DateTime($_POST["horaEntrada"]);
        $horaSaida = new DateTime($_POST["horaSaida"]);

        $horaTrabalhada = $horaEntrada->diff($horaSaida);

        echo "Trabalhou $horaTrabalhada->h:$horaTrabalhada->i horas<br><br>";

        echo '<a href="03_calculohoras.html">Voltar</a>';
    }else{
        echo 'Acesso Inválido';
    }

?>