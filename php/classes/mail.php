<?php

$name = $_POST["username"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "../../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 465;

$mail->Username = "ESportManagerMail@gmail.com";
$mail->Password = "uprhurfpekskqnlk";

$mail->setFrom($email, $name);
$mail->addAddress("ESportManagerMail@gmail.com", "E-Sport Manager");

$mail->Subject = $subject;
$mail->Body = "From:  $email \n Message: \n $message";

$mail->send();

header("location: ../../contact.php?thanksforanmessage");

?>