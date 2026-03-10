<?php
    $conexao = mysqli_connect("localhost", "root", "", "escola_thiago");

    if($conexao->connect_error) 
    {
        die("Erro na conexão");
    }

    echo "<table border='1' cellpadding='8'>";

    echo "<tr>
        <th>Código</th>
        <th>Alunos</th>
        <th>Idade</th>
        <th>UF</th>
        <th>Cidade</th>
    </tr>";

    $sql = "SELECT id, nome, idade, uf, cidade FROM alunos";
    $resultado = $conexao->query($sql);

    while($linha = $resultado->fetch_assoc()){
        echo "<tr>";
        
        echo"<td>".$linha['id']."</td>";
        echo"<td>".$linha['nome']."</td>";
        echo"<td>".$linha['idade']."</td>";
        echo"<td>".$linha['uf']."</td>";
        echo"<td>".$linha['cidade']."</td>";
        
        echo "</tr>";
    }
    echo "</table>";
?>