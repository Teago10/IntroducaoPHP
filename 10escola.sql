CREATE DATABASE escola_thiago;

USE escola_thiago;

CREATE TABLE alunos (

	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(70),
    idade int,
    uf CHAR(2),
    cidade VARCHAR(50)
);

INSERT INTO alunos (nome, idade, uf, cidade) VALUES 
	('Thiago Affonso', 18, 'SP', 'Marília'),
    ('Gabriel Henrique Martins', 19, 'SP', 'São Paulo'),
	('Larissa Fernanda Oliveira', 22, 'MG', 'Uberlândia');
    