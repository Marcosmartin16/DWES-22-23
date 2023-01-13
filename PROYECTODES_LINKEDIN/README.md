BASE DE DATOS

    usuarios
        -id
        -nombre
        -password
        -img
        -correo
        -descripcion

    token
        -id
        -id_usuario
        -valor
        -expiracion

PHP

    -listado.php (publica) /listado/         
    -detalle.php (publica) acepta id /detalle/<id>/ o /detalle/<nombre>/
    -login.php (publica) /login/
    -logout.php (privada) /logout/
    -registro.php (publica) /registro/
    -edit.php (privada) /perfil/
    -recuperar.php (publico) 

*******************************************************************

INSTALAR COMPOSER

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

sudo mv composer.phar /usr/local/bin/composer

composer require phpmailer/phpmailer

*******************************************************************
read.me

## LINKEDIN

## Instalacion

Crear base de datos

CREATE DATABASE linkedin;
CREATE USER 'linkedin'@'localhost' IDENTIFIED BY 'linkedin';
GRANT ALL PRIVILEGES ON linkedin.* TO 'linkedin'@'localhost' WITH GRANT OPTION;


Comenzar aplicacion en limpio

mysql -u usuario -p nombrebasededatos < scripts/db.create.sql

Dar permisos 

chmod u+x ./rundevserver.sh

Ejecutar

./rundevserver.sh


sudo apt update
sudo apt install mariadb-server
sudo apt install php-mysql

gg