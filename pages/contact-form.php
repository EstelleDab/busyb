<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'smtp-relay.brevo.com'; 
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 

$mail->Username = 'agencebusyb@gmail.com'; 
$mail->Password = 'YOJKDaCRV4rE9f2t'; 

$mailFrom = 'agencebusyb@gmail.com'; 
$mail->setFrom($mailFrom, $fname." ".$lname);

$mail->addAddress('agencebusyb@gmail.com'); 

$mail->Subject = 'Message de ' .$fname." ".$lname. 'via le formulaire de contact';
$mail->Body = "Vous avez un e-mail de " . $fname . " " . $lname . ".\n\n Numero : " . $phone . ".\n\n" . $message;


try {
    $mail->send();
    echo 'Message envoyé';
} catch (Exception $e) {
    echo "Message non envoyé. Mailer Error: {$mail->ErrorInfo}";
}

header("Location: sent.html");

?>