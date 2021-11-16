<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'archivos/Exception.php';
require 'archivos/PHPMailer.php';
require 'archivos/SMTP.php';


$mail = new PHPMailer(true);

$mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'f1e267931c0b16';                     //SMTP username
    $mail->Password   = 'da2a93c1fd993d';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 2525;   
    $mail->SMTPSecure = 'tls';

    
$mail->setFrom('jhoedmon1@gmail.com', 'Mailer');
$mail->addAddress('jhoedmon@gmail.com', 'Joe User');  

$mail->isHTML(true);

$mail->Subject = "PHPMailer SMTP test";
$mail->addEmbeddedImage('archivos/car.jpeg', 'image_cid');
$mail->Body = '<img src="cid:image_cid"> Mail body in HTML';
$mail->AltBody = 'This is the plain text version of the email content';

if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';}