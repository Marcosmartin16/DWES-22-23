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