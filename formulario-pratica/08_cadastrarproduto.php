<?php
    $conexao = mysqli_connect('localhost', 'root', '', 'loja');

    if($conexao->connect_error) 
    {
        die("Erro na conexão");
    }

    // Inserir no banco de dados
    if(isset($_POST['nome']) && isset($_POST['preco']) && isset($_POST['estoque'])){

        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $estoque = $_POST['estoque'];

        $insert = "INSERT INTO produtos (nome, preco, estoque) 
        VALUES ( '$nome', $preco, $estoque )";

        if($resultadoInsert = $conexao->query($insert)){
            echo 'Incluído com Sucesso';
        }else{
            echo 'Erro na inclusão';
        }

    }

    

    echo "<table border='1' cellpadding='8'>";
    
    echo "<tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Estoque</th>
    </tr>";

    //mostrar produtos

    $sql = "SELECT id, nome, preco, estoque FROM produtos";
    $resultado = $conexao->query($sql);

    while($linha = $resultado->fetch_assoc()){
        echo "<tr>";
        
        echo"<td>".$linha['id']."</td>";
        echo"<td>".$linha['nome']."</td>";
        echo"<td> R$".number_format($linha['preco'], 2, ',', '.')."</td>";
        echo"<td>".$linha['estoque']."</td>";
        
        echo "</tr>";

    }
    echo "</table>";
    
    echo '<br><br><a href="08_cadastrarproduto.html">Voltar</a>';
?>