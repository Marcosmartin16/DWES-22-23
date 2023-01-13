<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer{

    function __construct(){}

    function sendEmail($email, $encabezadoEmail, $contenidoEmail){
        
        require("config.php");

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.educa.madrid.org';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'marcos.martin16';                     //SMTP username
            $mail->Password   = $CONFIG['secreto'];                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('marcos.martin16@educa.madrid.org', 'Marcos.martin16');
            $mail->addAddress($email);     //Add a recipient
            $mail->addReplyTo('marcos.martin16@educa.madrid.org');
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $encabezadoEmail;
            $mail->Body    = $contenidoEmail;
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

?>
