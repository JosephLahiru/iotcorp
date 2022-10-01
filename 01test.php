<?php

$name = "Niraj";
$email = "mgrgyane12@gmail.com";
$subject = "Test";
$message = "Is this Working?";

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "iotcorp.in@gmail.com";
$mail->Password = "sxtuwhmsxqtzyjhv";

$mail->setFrom($email, $name);
$mail->addAddress("iotcorp.in@gmail.com", "IoTcorp");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");