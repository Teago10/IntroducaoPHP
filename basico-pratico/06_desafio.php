    <?php
    /*
    $salarioBruto = 9000.00;
    $valorinss = 0.00;
    $salarioLiquido = 0.00;
    
    if($salarioBruto > 1621.00){
        $valorinss += 1621.00 * 0.075;
    }else{
        $valorinss += $salarioBruto * 0.075;
    }
    
    if($salarioBruto > 1621.00){
        if($salarioBruto > 2902.84){
            $valorinss += (2902.84 - 1621.00) * 0.09;
        }else{
            $valorinss += ($salarioBruto - 1621.00) * 0.09;
        }
    }
    if($salarioBruto > 2902.84){
        if($salarioBruto > 4354.27){
            $valorinss += (4354.27 - 2902.84) * 0.12;
        }else{
            $valorinss += ($salarioBruto - 2902.84) * 0.12;
        }
    }
    if($salarioBruto > 4354.27){
        if($salarioBruto > 8475.55){
            $valorinss += (8475.55 - 4354.27) * 0.14;
        }else{
            $valorinss += ($salarioBruto - 4354.27) * 0.14;
        }
    }

    $salarioLiquido = $salarioBruto - $valorinss;

    echo 'Salário Bruto: R$'.number_format($salarioBruto,2);
    echo '<br>Valor do INSS: R$'.number_format($valorinss,2);
    echo '<br>Salário líquido: R$'.number_format($salarioLiquido,2);
*/
?>

<?php
    $salariobruto= "9000.00";
    $descontototal = 0.0;

    $tabela = [
        [0.00,1621.00,1621.00,7.50],
        [1621.01,2902.84,1281.84,9.00],
        [2902.85,4354.27,1451.43,12.00],
        [4354.28,8475.55,4121.28,14.00]
    ]

?>    

<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Idade</title>
        
    </head>
    <body>
        <?php
            $sobra = $salariobruto;
            /*
            if($sobra > 0.0){
                if( $salariobruto > $tabela[0][1] ){
                   $descontototal += $tabela[0][2] * $tabela[0][3] /100.0;
                   $sobra -= $tabela[0][2];
                }else{
                    $descontototal += $sobra * $tabela[0][3] /100.0;
                    $sobra -= $sobra;
                }
            }

            if($sobra > 0.0){
                if( $salariobruto > $tabela[1][1] ){
                   $descontototal += $tabela[1][2] * $tabela[1][3] /100.0;
                   $sobra -= $tabela[1][2];
                }else{
                    $descontototal += $sobra * $tabela[1][3] /100.0;
                    $sobra -= $sobra;
                }
            }

            if($sobra > 0.0){
                if( $salariobruto > $tabela[2][1] ){
                   $descontototal += $tabela[2][2] * $tabela[2][3] /100.0;
                   $sobra -= $tabela[2][2];
                }else{
                    $descontototal += $sobra * $tabela[2][3] /100.0;
                    $sobra -= $sobra;
                }
            }
            */
            for($faixa = 0; $faixa < count($tabela); $faixa++){
                if($sobra > 0.0){
                    if( $salariobruto > $tabela[$faixa][1] ){
                       $descontototal += $tabela[$faixa][2] * $tabela[$faixa][3] /100.0;
                       $sobra -= $tabela[$faixa][2];
                    }else{
                        $descontototal += $sobra * $tabela[3][3] /100.0;
                        $sobra -= $sobra;
                    }
                }
            }

            $salarioliquido = $salariobruto - $descontototal;
            echo "Salário Bruto: " . number_format($salariobruto, 2, '.', '') . 
                " <br>Desconto INSS: " . number_format($descontototal, 2, '.', '') . 
                " <br>Salário Líquido: " . number_format($salarioliquido, 2, '.', '');
        ?>
    </body>
    
</html>