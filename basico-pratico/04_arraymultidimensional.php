<?php
    $estados = [
        [
            'AC ',' Acre',
            'AL ',' Alagoas',
            'AP ',' Amapá',
            'AM ',' Amazonas',
            'BA ',' Bahia',
            'CE ',' Ceará',
            'DF ',' Distrito Federal',
            'ES ',' Espirito Santo',
            'GO ',' Goiás',
            'MA ',' Maranhão',
            'MS ',' Mato Grosso do Sul'
        ]
    ];

    
?>

<!DOCTYPE html>
    <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <title>Calculo da Idade</title>
        </head>
        <body>
            <?php 
                for ($i=0; $i < count($estados); $i++) { 
                    echo "UF: {$estados[$i][0]} - Estado: {$estados[$i][1]}";
                }
            ?>
        </body>
    </html>