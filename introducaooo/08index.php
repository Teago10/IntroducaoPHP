<?php

    require("08conta.php");
    require("08pessoafisica.php");
    require("08pessoajuridica.php");

    $pessoaFisica = new pessoaFisica("001" , '12345-6', 755.54, 0.55);
    $pessoaFisica-> imprimeExtrato();

    $pessoaJuridica = new pessoaJuridica("006" , 1500.00, '34256-8' , 5000.00);
    $pessoaJuridica-> imprimeExtrato();
?>