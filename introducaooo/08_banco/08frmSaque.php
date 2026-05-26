<?php

    require_once("08conta.php");
    require_once("08poupanca.php");
    require_once("08especial.php");
    require_once("08itemExtrato.php");

    session_start();

    $ultimaConta = $_COOKIE["ultimaConta"] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Saque</title>
</head>

<body>
    
    <h2>Realizar Saque</h2>

    <?php

    // Verifica se existem contas cadastradas
    if (
        !isset($_SESSION["contas"]) ||
        count($_SESSION["contas"]) == 0
    ) {

        echo "Nenhuma conta cadastrada!";
    } else {

    ?>
        <form action="08saque.php" method="post">

            <label>Selecione a Conta</label>
            <br><br>

            <select name="indiceConta" required>

                <?php
                
                    foreach($_SESSION["contas"] as $indice => $conta){

                        $selected = "";

                        if($ultimaConta !== null && $ultimaConta == $indice){
                            $selected = "selected";
                        }
                        
                        echo '
                        <option value="' . $indice . '" '. $selected .'>
                            ' . $conta-> contaFormatada() . '
                        </option>';
                    }

                ?>

            </select>

            <br><br>

            <label> Valor do Saque:</label>
            <br><br>

            <input
                type="number"
                name="valor"
                step="0.01"
                required>

            <br><br>

            <button type="submit">
                Saque
            </button>

        </form>

    <?php
    }
    ?>

</body>

</html>