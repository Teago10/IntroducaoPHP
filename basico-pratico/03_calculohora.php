<?php
    $horaEntrada = new DateTime("06:40");
    $horaSaida = new DateTime("07:00");

    $horaTrabalhada = $horaSaida->diff($horaEntrada) ;

?>

<!DOCTYPE html>
    <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <title>Calculo da Idade</title>
        </head>
        <body>
            <?php 
                echo "Horas trabalhadas $horaTrabalhada->h:$horaTrabalhada->i";
            ?>
        </body>
    </html>