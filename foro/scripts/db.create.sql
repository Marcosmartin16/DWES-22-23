DROP TABLE IF EXISTS tokens;
DROP TABLE IF EXISTS usuarios;

CREATE TABLE usuarios (
    id int auto_increment PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    pass VARCHAR(255) NOT NULL,
    img    VARCHAR(255),
    email VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE tokens (
    id int auto_increment PRIMARY KEY,
    id_usuario int,
    valor VARCHAR(255),
    expiracion DATETIME NOT NULL DEFAULT (NOW() + INTERVAL 7 DAY),
    CONSTRAINT fk_id_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

CREATE DATABASE foroBarras;
CREATE USER 'foroBarras'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON foroBarras.* TO 'foroBarras'@'localhost' WITH GRANT OPTION;

CREATE DATABASE noticiario;
GRANT ALL PRIVILEGES ON noticiario.* TO 'mysite'@'localhost' WITH GRANT OPTION;