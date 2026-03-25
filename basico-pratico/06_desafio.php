<?php
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

?>