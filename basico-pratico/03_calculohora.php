<?php
    $horaEntrada = new DateTime("06:00");
    $horaSaida = new DateTime("22:30");

    $horaTrabalhada = $horaSaida->diff($horaEntrada) ;

    echo $horaTrabalhada->h.':'.$horaTrabalhada->i;
?>