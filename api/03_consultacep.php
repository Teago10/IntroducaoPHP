<?php

if (!isset($_POST["cep"])) {

    echo "Nenhum CEP informado!";
    exit;
}

$cep = trim($_POST["cep"]);

// Verifica campo vazio
if (empty($cep)) {

    echo "CEP não informado!";
    exit;
}

// Verifica se contém apenas números
if (!ctype_digit($cep)) {

    echo "Digite apenas números!";
    exit;
}

// Verifica tamanho
if (strlen($cep) != 8) {

    echo "CEP inválido! Digite 8 números.";
    exit;
}

// URL da API
$url = "https://viacep.com.br/ws/$cep/json/";

// Inicializa cURL
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$dados = curl_exec($ch);

if (curl_errno($ch)) {

    echo "Erro ao conectar com a API!";
    curl_close($ch);
    exit;
}

curl_close($ch);

// Converte JSON para array
$endereco = json_decode($dados, true);

// Verifica se CEP existe
if (isset($endereco["erro"])) {

    echo "CEP não encontrado!";
    exit;
}

echo "<h2>Endereço Encontrado</h2>";

echo "CEP: " . htmlspecialchars($endereco["cep"]) . "<br>";
echo "Rua: " . htmlspecialchars($endereco["logradouro"]) . "<br>";
echo "Bairro: " . htmlspecialchars($endereco["bairro"]) . "<br>";
echo "Cidade: " . htmlspecialchars($endereco["localidade"]) . "<br>";
echo "Estado: " . htmlspecialchars($endereco["uf"]) . "<br>";

echo '<br><a href="03_consultacep.html">Voltar</a>';
?>