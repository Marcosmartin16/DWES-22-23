DROP TABLE IF EXISTS tokens;
DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS cocteles;
DROP TABLE IF EXISTS cachimbas;
DROP TABLE IF EXISTS alimentacion;

CREATE TABLE usuarios (
    id int auto_increment PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL UNIQUE,
    passwd VARCHAR(255) NOT NULL,
    img    VARCHAR(255),
    correo VARCHAR(255) NOT NULL UNIQUE,
    descripcion TEXT
);

CREATE TABLE tokens (
    id int auto_increment PRIMARY KEY,
    id_usuario int,
    valor VARCHAR(255),
    expiracion DATETIME NOT NULL DEFAULT (NOW() + INTERVAL 7 DAY),
    CONSTRAINT fk_id_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);


CREATE TABLE cocteles (
    id int auto_increment PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL UNIQUE,
    img    VARCHAR(255),
    descripcion TEXT NOT NULL,
    precio VARCHAR(255) NOT NULL 
);

CREATE TABLE cachimbas (
    id int auto_increment PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL UNIQUE,
    img    VARCHAR(255),
    descripcion TEXT NOT NULL,
    precio VARCHAR(255) NOT NULL 
);

CREATE TABLE alimentacion (
    id int auto_increment PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL UNIQUE,
    img    VARCHAR(255),
    descripcion TEXT NOT NULL,
    precio VARCHAR(255) NOT NULL 
);

CREATE TABLE productos (
    id int auto_increment PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL UNIQUE,
    img    VARCHAR(255),
    descripcion TEXT NOT NULL,
    precio VARCHAR(255) NOT NULL, 
    categoria    VARCHAR(255)
);

CREATE TABLE pedido (
    id int auto_increment PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL UNIQUE,
    nombreProducto VARCHAR(255) NOT NULL UNIQUE
);


CREATE DATABASE localTeteria;
CREATE USER 'localTeteria'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON localTeteria.* TO 'localTeteria'@'localhost' WITH GRANT OPTION;

INSERT INTO productos (nombre, img, descripcion, precio, categoria)
    VALUES ('coctel1', './img/coctail1.png', 'esto es el coctel 1', '22', 'cocteles');

INSERT INTO productos (nombre, img, descripcion, precio, categoria)
    VALUES ('coctel2', './img/coctail1.png', 'esto es el coctel 2', '22', 'cocteles');
    
INSERT INTO productos (nombre, img, descripcion, precio, categoria)
    VALUES ('coctel3', './img/coctail1.png', 'esto es el coctel 3', '22', 'cocteles');

INSERT INTO productos (nombre, img, descripcion, precio, categoria)
    VALUES ('cachimbas1', './img/coctail1.png', 'esto es la cachimba 1', '22', 'cachimbas');

INSERT INTO productos (nombre, img, descripcion, precio, categoria)
    VALUES ('cachimbas2', './img/coctail1.png', 'esto es la cachimba 2', '22', 'cachimbas');
    
INSERT INTO productos (nombre, img, descripcion, precio, categoria)
    VALUES ('cachimbas3', './img/coctail1.png', 'esto es la cachimba 3', '22', 'cachimbas');

