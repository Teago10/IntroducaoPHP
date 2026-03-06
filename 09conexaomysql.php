<?php

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'loja';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error)
    {
        die('Erro na conexão');
    }

        echo  'Conexão realizada com suscesso!';
?>