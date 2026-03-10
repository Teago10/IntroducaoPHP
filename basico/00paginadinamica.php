<!DOCTYPE html>
    <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <title>Curso de PHP</title>
        </head>
        <body>
            <?php ?>
            <p>
                Olá, hoje é dia <?php 
                
                    echo date('d/m/Y'); 

                    //Aspas simples '', utilizado apenas para textos simples
                    $teste = 1;
                    echo '<p>A caixa d\'aguá está vazia.\\$teste';
                    echo '<p>A caixa d\'aguá está vazia.\\'.$teste; //coontatenação

                    //Aspas duplas "", são  processados. Por isso permite mais recursos
                    $litros = '1000L';
                    echo "<br>A caixa d'aguá é de $litros"
                ?>
                
            </p>
        </body>
    </html>