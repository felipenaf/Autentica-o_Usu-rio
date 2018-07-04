/*Criação do Banco de Dados*/
CREATE DATABASE senac;

/* Criação da tabela no banco de dados */
CREATE TABLE usuario (
    id INT(5) NOT NULL AUTO_INCREMENT,
    login VARCHAR(50) NOT NULL,
    senha VARCHAR(50) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (login)
);

/*Inserindo valores na tabela usuario*/
INSERT INTO usuario (login, senha) VALUES ('', '');
