<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 10/11/16
 * Time: 13:55
 */
// require 'PHPMailer/PHPMailerAutoload.php';

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';


$mail = new PHPMailer;
$mail->CharSet = "UTF-8";

$mail->isSMTP();                                    // Set mailer to use SMTP
$mail->Host = 'smtp.sparkpostmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                             // Enable SMTP authentication
$mail->Username = 'SMTP_Injection';                 // SMTP username
$mail->Password = '8abb632ad5ab2cd6482d7a514a0e5834c52df5ac';                           // SMTP password
$mail->SMTPSecure = 'starttls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                      // TCP port to connect to

$mail->setFrom('no-reply@includetecnologia.com.br', 'No-reply');
$mail->addAddress('contato@emprobrasil.com.br', 'Mirtes Prota');                              // Name is optional

$mail->isHTML(true);                                    // Set email format to HTML