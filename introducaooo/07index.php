<?php

    require("07pessoa.php");
    require("07pessoafisica.php");
    
    $pessoaFisica = new pessoaFisica("123.456.789-65", 30, 125.25);
    $pessoaFisica-> imprime();
?>