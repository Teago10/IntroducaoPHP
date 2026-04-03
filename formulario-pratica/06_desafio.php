<?php

    $descontototal = 0.0;

    $tabela = [
        [0.00,1621.00,1621.00,7.50],
        [1621.01,2902.84,1281.84,9.00],
        [2902.85,4354.27,1451.43,12.00],
        [4354.28,8475.55,4121.28,14.00]
    ];

    if(isset($_POST['salario'])){

        $salariobruto = floatval($_POST['salario']);
        $sobra = $salariobruto;

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

        echo "Salário Bruto: R$ " . number_format($salariobruto, 2, ',', '.') . "<br>";
        echo "Desconto Total: R$ " . number_format($descontototal, 2, ',', '.') . "<br>";
        echo "Salário Líquido: R$ " . number_format($salariobruto - $descontototal, 2, ',', '.') . "<br><br>";

        echo '<a href="06_desafio.html">Voltar</a>';
    }else{
        echo "Ocorreu um erro ao processar o formulário. Por favor, tente novamente.";
    }


?>