<?php
    $alunos = [
        [
            'João',
            18,
            'Marília',
            true
        ],
        [
            'Maria',
            18,
            'Vera Cruz',
            true
        ],
        [
            'Antonio',
            57,
            'Pompeia',
            false
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
            echo "nome: ".$alunos[$i][0]. 
                "<br>idade: ".$alunos[$i][1] .
                "<br>Cidade:". $alunos[$i][2];
            echo "<hr>";
        }
    }

    
    ?>
</body>

</html>