<?php

require("config.php");
require("DWESBaseDatos.php");
require("../vendor/autoload.php");

/*require("../vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("../vendor/phpmailer/phpmailer/src/SMTP.php");
require("../vendor/phpmailer/phpmailer/src/Exception.php");*/

$DB = DWESBaseDatos::obtenerInstancia();
$DB->inicializa($CONFIG['db_name'], $CONFIG['db_user'], $CONFIG['db_pass']);

?>