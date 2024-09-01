-- Criação do banco de dados e das tabelas
CREATE DATABASE Celltech;
USE Celltech;

CREATE TABLE Categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT
);

CREATE TABLE Suppliers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    contato VARCHAR(100),
    telefone VARCHAR(15),
    email VARCHAR(100)
);

CREATE TABLE Products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade_em_estoque INT DEFAULT 0,
    categoria_id INT,
    fornecedor_id INT,
    FOREIGN KEY (categoria_id) REFERENCES Categories(id),
    FOREIGN KEY (fornecedor_id         MM  ) REFERENCES Suppliers(id)
);

CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(15),
    endereco TEXT,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Inserção de dados
INSERT INTO Categories (nome, descricao) 
VALUES ('Celulares', 'Dispositivos móveis para comunicação e entretenimento.');

INSERT INTO Categories (nome, descricao) 
VALUES ('Tablets', 'Dispositivos móveis com tela maior, usados para navegação e consumo de mídia.');

INSERT INTO Suppliers (nome, contato, telefone, email) 
VALUES ('TechSupply', 'João Silva', '(11) 1234-5678', 'contato@techsupply.com');

INSERT INTO Suppliers (nome, contato, telefone, email) 
VALUES ('MobileWorld', 'Ana Costa', '(21) 9876-5432', 'vendas@mobileworld.com');

INSERT INTO Products (nome, descricao, preco, quantidade_em_estoque, categoria_id, fornecedor_id) 
VALUES ('iPhone 14', 'Smartphone Apple com 128GB de armazenamento.', 7999.99, 50, 1, 1);

INSERT INTO Products (nome, descricao, preco, quantidade_em_estoque, categoria_id, fornecedor_id) 
VALUES ('Samsung Galaxy Tab S7', 'Tablet Samsung com tela de 11 polegadas e 128GB.', 4999.99, 30, 2, 2);

INSERT INTO Users (nome, email, senha, telefone, endereco) 
VALUES ('Maria Santos', 'maria.santos@example.com', 'senhaSegura123', '(11) 9876-5432', 'Rua Exemplo, 123, São Paulo, SP');

INSERT INTO Users (nome, email, senha, telefone, endereco) 
VALUES ('João Pereira', 'joao.pereira@example.com', 'outraSenha456', '(21) 9987-6543', 'Av. Central, 456, Rio de Janeiro, RJ');

-- Atualização de dados
UPDATE Products 
SET preco = 7499.99 
WHERE nome = 'iPhone 14';

UPDATE Products 
SET quantidade_em_estoque = quantidade_em_estoque - 5 
WHERE nome = 'Samsung Galaxy Tab S7';

UPDATE Users 
SET endereco = 'Rua Nova, 789, São Paulo, SP' 
WHERE email = 'maria.santos@example.com';

-- Deleção de dados
DELETE FROM Products 
WHERE nome = 'iPhone 14';

DELETE FROM Users 
WHERE email = 'joao.pereira@example.com';

DELETE FROM Suppliers 
WHERE nome = 'MobileWorld';
