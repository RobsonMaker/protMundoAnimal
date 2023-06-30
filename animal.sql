 DROP DATABASE IF EXISTS animal;
CREATE DATABASE animal;
USE animal;

CREATE TABLE usuario (
 codigo INT NOT NULL AUTO_INCREMENT,
 nome VARCHAR(30) NOT NULL,
 senha VARCHAR(10)  NOT NULL,
 email VARCHAR(30) NOT NULL,
 endereco VARCHAR(50) NOT NULL,
 adm INT ,-- NOT NULL,
 PRIMARY KEY (codigo)
 );
 
 CREATE TABLE produto(
 codigo INT NOT NULL AUTO_INCREMENT,
 nome VARCHAR(45),
 descricao VARCHAR(45),
 imagem VARCHAR(256),
  PRIMARY KEY (codigo)
 );
 
 CREATE TABLE categoria(
 codigo INT NOT NULL, 
 categoria VARCHAR(45), 
 PRIMARY KEY(codigo)
 );
 
 CREATE TABLE produto_categoria(
 codigoproduto INT NOT NULL,
 codigocategoria INT NOT NULL,
 PRIMARY KEY(codigoproduto,codigocategoria),
FOREIGN KEY(codigoproduto) REFERENCES produto(codigo),
FOREIGN KEY(codigocategoria) REFERENCES categoria(codigo)
 );
 
 
 
 