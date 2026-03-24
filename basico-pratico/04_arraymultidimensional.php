<?php
    $estados = [
        [
            'AC - Acre',
            'AL - Alagoas',
            'AP - Amapá',
            'AM - Amazonas',
            'BA - Bahia',
            'CE - Ceará',
            'DF - Distrito Federal',
            'ES - Espirito Santo',
            'GO - Goiás',
            'MA - Maranhão',
            'MS - Mato Grosso do Sul'
        ]
    ];

    for ($i=0; $i < count($estados); $i++) { 
        echo $estados[$i][0] ."<br>";
        echo $estados[$i][7] ."<br>";
        echo $estados[$i][4] ."<br>";
        }
?>