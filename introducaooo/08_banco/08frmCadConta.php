<?php

    require("08conta.php");
    require("08poupanca.php");
    require("08especial.php");
    require("08itemextrato.php");

    session_start();

    if(
        !isset($_SESSION["contas"]) ||
        !is_array($_SESSION["contas"])
    ){
        $_SESSION["contas"] = [];
    }

    //Verifica se veio via POST 
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $tipoDeConta = $_POST['tipoDeConta'];
        $agencia = $_POST['agencia'];
        $conta = $_POST['conta'];
        $saldoInicial = (float)$_POST['saldoInicial'];
        $reajuste = $_POST['reajuste'];
        $limiteEspecial = $_POST['limiteEspecial'];


        if($tipoDeConta == 'Poupança'){

            $reajuste = (float)$_POST["reajuste"];

            $_SESSION["contas"][] = new poupanca($agencia, $conta, $saldoInicial, $reajuste);

        }elseif($tipoDeConta == 'Especial'){

            $limiteEspecial = (float)$_POST["limiteEspecial"];

            $_SESSION["contas"][] = new especial($agencia, $conta, $saldoInicial, $limiteEspecial);

        }else{

            echo 'Tipo de conta Inválido';
            exit();
        }

        $indiceUltimo = array_key_last($_SESSION["contas"]);

        setcookie("ultimaConta", $indiceUltimo, time() + 3600, "/");

        echo '<br>

                <h2>Conta Cadastrada com Sucesso!!!</h2>
                <br>
                <a href="08menu.html">
                    <button>Voltar ao Menu</button>
                </a>
                ';

    }
    
?>