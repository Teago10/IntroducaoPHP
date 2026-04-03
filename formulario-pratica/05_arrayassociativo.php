<?php

    $consultacep = [];

    if(isset($_POST['cep']) && isset($_POST['rua']) && isset($_POST['bairro']) && isset($_POST['cidade']) && isset($_POST['uf'])) {
        $consultacep = [
            'Cep' => $_POST['cep'],
            'Rua' => $_POST['rua'],
            'Bairro' => $_POST['bairro'],
            'Cidade' => $_POST['cidade'],
            'UF' => strtoupper($_POST['uf'])
        ];

        foreach ($consultacep as $chave => $valor) {
            echo "$chave : $valor <br>";
        }

        echo '<br><a href="05_arrayassociativo.html">Voltar</a>';
    }

?>