CREATE DATABASE loja;
USE loja;

CREATE TABLE produtos(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    preco DECIMAL(10,2),
    estoque INT 
);

INSERT INTO produtos(nome, preco, estoque) VALUES
    ('guitarra', 1483.00, 58), 
    ('bateria', 576.00, 37), 
    ('caixa de som', 675.00, 12);

SELECT id, nome, preco, estoque FROM loja.produtos;

quando fomos executar o select não aconteceu nada, pois "FROM produtos"
estava direcionando para o "DATABASE escola" na qual ocasionava erro.
E a solução foi colocar loja.produtos para resolver.