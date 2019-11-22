DROP DATABASE IF EXISTS vitari;

CREATE DATABASE vitari DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE vitari;

DROP USER IF EXISTS 'admvitari'@'localhost';

CREATE USER 'adm'@'localhost' IDENTIFIED BY '123';

GRANT ALL PRIVILEGES ON * . * TO 'adm'@'localhost';

CREATE TABLE usuario (
    login VARCHAR(10) PRIMARY KEY,
    senha VARCHAR(20) NOT NULL,
    email VARCHAR(40) NOT NULL,

    UNIQUE(email)
);

CREATE TABLE admin (
    login VARCHAR(10) PRIMARY KEY,
    senha VARCHAR(20) NOT NULL,
    email VARCHAR(40) NOT NULL,

    UNIQUE(email)
);

CREATE TABLE tipo (
    cod INT AUTO_INCREMENT PRIMARY KEY,
    descr TEXT NOT NULL,

    UNIQUE(descr)
);

CREATE TABLE categoria (
    cod INT AUTO_INCREMENT PRIMARY KEY,
    descr TEXT NOT NULL,

    UNIQUE(descr)
);

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
