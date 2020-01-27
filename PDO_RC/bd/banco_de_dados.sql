CREATE DATABASE db_sistema;

use db_sistema;


CREATE TABLE clientes
(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	PRIMARY KEY(id)
);

ALTER TABLE `clientes` ADD `endereco` TEXT NULL AFTER `nome`, 
ADD `numero` INT(11) NULL AFTER `endereco`, 
ADD `tipo` VARCHAR(11) NULL AFTER `numero`;

CREATE TABLE produtos
(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(150) NOT NULL,
	preco DOUBLE(9,2) NOT NULL,
	quantidade INT NOT NULL,
	categoria_id INT NOT NULL,
	PRIMARY KEY(id)
);



INSERT INTO clientes (nome) VALUES
('Adriano'),
('Allan'),
('Eduardo'),
('Dylan');
INSERT INTO clientes (endereco, numero, tipo) VALUES
('J. Pessoa', '111','sei la'),
('Pacas','123','sei la'),
('Jereissati','135','sei la'),
('Pacas','189','sei la');

INSERT INTO produtos (nome, preco, quantidade, categoria_id) VALUES
('Produto 1', 119.50, 10, 3),
('Produto 2 City', 65.99, 7, 2),
('Produto 3', 29.90, 5, 1),
('Produto 4', 199.99, 2, 1),
('Produto 5', 89.90, 1, 3);


