DROP DATABASE IF EXISTS anydea;
CREATE DATABASE anydea;
USE anydea;
CREATE TABLE user (
  PersonID int NOT NULL,
  NOME varchar(100) NOT NULL,
  EMAIL varchar(100) NOT NULL,
  SENHA varchar(8) NOT NULL,
  PRIMARY KEY (PersonID)
);
