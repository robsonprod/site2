<?php
/**
 * Created by PhpStorm.
 * User: IncludeTecnologia
 * Date: 22/09/2016
 * Time: 16:56
 */

if(empty($_POST['name'])){ $error['name'] = "Insira seu nome!";};
if(empty($_POST['email'])){ $error['email'] = "Insira seu e-mail!";};
if(empty($_POST['message'])){ $error['message'] = "Envie uma menssagem!";};


if (isset($error)){
    return $error;
}
include_once 'config.php';
$mail->Subject = 'Contato pelo Site Empro';

$body = "Entraram em contato com você pelo formulario de contato do Site Empro.<br>";
$body .= "<strong> Nome:  </strong>".$_POST['name']."<br>";
$body .= "<strong> Email: </strong>".$_POST['email']."<br>";
$body .= "<strong> Menssagem: </strong>".$_POST['message']."<br>";
$body .= "Lembre-se de entrar em contato com seu cliente ele é muito importante para você.";

$mail->Body    = $body;

if($mail->send()) {
    $data['success'] = "Tudo Certo" ;
    $data['message'] = " ".$_POST['name'].". Sua mensagem foi enviada com sucesso, em breve entraremos em contato com você!";
} else {
	$data['error'] = "Algo Aconteceu de Errado!";
    $data['message'] = $mail->ErrorInfo;
}
header('Content-Type: application/json');
$data = json_encode($data);
echo $data;
return $data;
