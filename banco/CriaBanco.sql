DROP DATABASE IF EXISTS IFSP;

CREATE DATABASE IF NOT EXISTS IFSP;

USE IFSP;

CREATE TABLE cidade
(
    id  INT,
    nome    VARCHAR(100),
    estado  VARCHAR(002),
    PRIMARY KEY(id)
);

CREATE TABLE cliente
(
    id  int AUTO_INCREMENT,
    nome    VARCHAR(100),
    email   VARCHAR(100),
    senha   VARCHAR(050),
    ativo   BOOL,
    id_cidade   INT,
    PRIMARY KEY(id),
    CONSTRAINT FK_ClienteCidade 
        FOREIGN KEY (id_cidade) REFERENCES cidade(id)
)

/*INSERT INTO cidade VALUES
	(1, 'Birigui', 'SP'),
    (2, 'Bilac', 'SP'),
    (3, 'Betim', 'MG'),
    (4, 'Ipojuca', 'PE'),
    (5, 'Blumenau', 'SC');
    
SELECT * FROM cidade WHERE estado = 'SP';

INSERT INTO cliente VALUES
	(1, 'Aurora', 4),
    (2, 'Breno', 3),
    (3, 'Carolaine', 1),
    (4, 'Dalberto', 5),
    (5, 'Evellyn', 2);
    
SELECT * FROM cliente WHERE id = 1;
UPDATE cidade SET nome = 'Bauru' WHERE id = 1;
UPDATE cliente SET nome = 'Cássio Stersi' WHERE id = 1;
UPDATE cliente SET id_cidade = 1 WHERE id_cidade = 4;
DELETE FROM cidade WHERE id = 4;
DELETE FROM cliente WHERE id = 1;*/