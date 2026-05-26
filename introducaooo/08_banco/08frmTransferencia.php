<?php

    require_once("08conta.php");
    require_once("08poupanca.php");
    require_once("08especial.php");
    require_once("08itemExtrato.php");

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transferencia entre Contas</title>
</head>
<body>
    
    <h2>Realizar Transferencia</h2>

    <?php
    
        // Verifica se existem contas cadastradas
        if (
            !isset($_SESSION["contas"]) ||
            count($_SESSION["contas"]) < 2
        ) {

            echo "É necessário ter pelo menos 2 contas cadastradas para realizar uma transferência!";
        } else { 
        
    ?>
        <form action="08transferencia.php" method="post">

            <label>Conta de Origem</label>
            <br><br>

            <select name="indiceContaOrigem" required>

                <?php
                
                    foreach($_SESSION["contas"] as $indice => $conta){

                        echo '
                        <option value="' . $indice . '">
                            ' . $conta-> contaFormatada() .'
                        </option>';
                    }
                ?>

            </select>

            <br><br>

            <label>Conta de Destino</label>
            <br><br>

            <select name="indiceContaDestino" required>

                <?php
                
                    foreach($_SESSION["contas"] as $indice => $conta){

                        echo '
                        <option value="' . $indice . '">
                            ' . $conta-> contaFormatada() .'
                        </option>';
                    }
                ?>

            </select>

            <br><br>

            <label>Valor da Transferência</label>
            <br><br>

            <input type="number" name="valor" step="0.01" min="0.01" required>

            <br><br>

            <button type="submit">Realizar Transferência</button>
        
        </form>
        
        <?php } ?>
</body>
</html>