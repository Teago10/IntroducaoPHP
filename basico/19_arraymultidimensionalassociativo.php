<?php
    $alunos = [
        [
            'nome'=>'João',
            'idade'=>18,
            'cidade'=>'Marília',
            'ativo'=>true
        ],
        [
            'nome'=>'Maria',
            'idade'=>18,
            'cidade'=>'Vera Cruz',
            'ativo'=>true
        ],
        [
            'nome'=>'Antonio',
            'idade'=>57,
            'cidade'=>'Pompeia',
            'ativo'=>false
        ]
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>

<body>
    <?php
    for($i = 0; $i < count($alunos); $i++){
        
        if ($alunos[$i][3]) {
            echo "nome: ".$alunos[$i]['nome']. 
                "<br>idade: ".$alunos[$i]['idade'] .
                "<br>Cidade:". $alunos[$i]['cidade'];
            echo "<hr>";
        }
    }

    
    ?>
</body>

</html>