<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "escola_thiago";

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error) 
    {
        die("Erro na conexão");
    }

    //echo 'Conexão realizada com sucesso';

    $sql_mostrar_campos = "SELECT id, nome, idade, uf, cidade FROM alunos";
    $resultado = $conexao->query($sql_mostrar_campos);

    if($resultado->num_rows > 0){

        while($linha = $resultado->fetch_assoc()){
                echo '<p>-------------------------------------------------------';
                echo "<p><strong>Código Aluno:</strong> $linha[id] 
                <strong>Aluno:</strong> $linha[nome] <br>
                <strong>Idade:</strong> $linha[idade] 
                <strong>UF:</strong> $linha[uf] 
                <strong>Cidade:</strong> $linha[cidade]";

        }
    }

?>