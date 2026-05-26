<?php

    require_once("08conta.php");
    require_once("08poupanca.php");
    require_once("08especial.php");
    require_once("08itemExtrato.php");

    session_start();

    if(!isset($_SESSION["contas"])){

        echo "Nenhuma conta cedastrada!";
        exit;
    }

    // Recebe os dados do formulário
    $indiceContaOrigem = $_POST["indiceContaOrigem"];
    $indiceContaDestino = $_POST["indiceContaDestino"];
    $valor = (float) $_POST["valor"];

    // Recupera as contas de origem e destino
    $contaOrigem = $_SESSION["contas"][$indiceContaOrigem];
    $contaDestino = $_SESSION["contas"][$indiceContaDestino];

    // Realiza a transferência
    if($contaOrigem->transferencia($valor, $contaDestino)){

        // Atualiza as contas na sessão
        $_SESSION["contas"][$indiceContaOrigem] = $contaOrigem;
        $_SESSION["contas"][$indiceContaDestino] = $contaDestino;

        setcookie("ultimaConta", $indiceContaOrigem, time() + 3600);

        echo "<h2>Transferência realizada com sucesso!</h2>";
    } else {

        echo "<h2>Saldo insuficiente para realizar a transferência!</h2>";
    }
?>