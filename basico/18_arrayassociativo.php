<?php
    $produto = [
        'nome' => 'teclado',
        'preco' => 180.60,
        'estoque' => 6
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
                if($produto['estoque'] > 0){
                    $precoFormatado = number_format($produto['preco'], 2, ',', '.');
                    echo "Produto: $produto[nome]<br> preço: $precoFormatado<br> Em estoque: $produto[estoque]";
                }
                else{
                    echo 'Produto fora de estoque';
                }
            ?>
        </body>
    </html>