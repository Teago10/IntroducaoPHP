<?php
    $consultacep = [
        'Cep' => 17543828,
        'Rua' => 'Rua 14 de Dezembro',
        'Bairro' => 'Centro',
        'Cidade' => 'Marília',
        'UF' => 'SP'
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
                foreach ($consultacep as $chave => $valor) {
                    echo "$chave : $valor <br>";
                }
            ?>
        </body>
    </html>