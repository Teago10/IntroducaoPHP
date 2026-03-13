<!DOCTYPE html>
    <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <title>Desvio Condicional</title>
        </head>
        <body>
            <?php 
                $nota = rand(0, 10);

                if($nota >= 6)
                {
                    echo "Aprovado com nota: $nota";
                }else{
                    echo "Reprovado com nota: $nota";
                }

                // $msg = ($idade >= 18)?"Aprovado":"Reprovado";
            ?>
            </p>
        </body>
    </html>