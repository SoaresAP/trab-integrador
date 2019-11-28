DROP DATABASE IF EXISTS vitari;

CREATE DATABASE vitari DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE vitari;

DROP USER IF EXISTS 'adm'@'localhost';

CREATE USER 'adm'@'localhost' IDENTIFIED BY '123';

GRANT ALL PRIVILEGES ON * . * TO 'adm'@'localhost';

SET GLOBAL lc_time_names=en_US;

DROP TABLE IF EXISTS usuario;

CREATE TABLE usuario (
    login VARCHAR(10) PRIMARY KEY,
    senha VARCHAR(20) NOT NULL,
    email VARCHAR(40) NOT NULL,

    UNIQUE(email)
);

DROP TABLE IF EXISTS admin;

CREATE TABLE admin (
    login VARCHAR(10) PRIMARY KEY,
    senha VARCHAR(20) NOT NULL,
    email VARCHAR(40) NOT NULL,

    UNIQUE(email)
);

DROP TABLE IF EXISTS tipo;

CREATE TABLE tipo (
    cod INT PRIMARY KEY,
    descr VARCHAR(50) NOT NULL,

    UNIQUE(descr)
);

DROP TABLE IF EXISTS categoria;

CREATE TABLE categoria (
    cod INT PRIMARY KEY,
    descr VARCHAR(50) NOT NULL,

    UNIQUE(descr)
);

DROP TABLE IF EXISTS produto;

CREATE TABLE produto (
    cod INT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    ctipo INT NOT NULL,
    ccat INT NOT NULL,
    valor FLOAT NOT NULL,
    dtfab DATE NOT NULL,
    dtval DATE NOT NULL,
    descr TEXT NOT NULL,
    img TEXT,

    FOREIGN KEY (ctipo) REFERENCES tipo(cod),
    FOREIGN KEY (ccat) REFERENCES categoria(cod)
);
