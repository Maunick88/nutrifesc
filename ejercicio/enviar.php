<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.example.com';  // Servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'tu_email@example.com';  // Tu dirección de correo electrónico
$mail->Password = 'tu_contraseña';  // Tu contraseña de correo electrónico
$mail->SMTPSecure = 'tls';  // TLS o SSL, según corresponda
$mail->Port = 587;  // Puerto SMTP

$mail->setFrom('tu_email@example.com', 'Tu Nombre');
$mail->addAddress('destinatario@example.com', 'Destinatario');

$mail->isHTML(true);

$mail->Subject = 'Asunto del correo';
$mail->Body    = 'Contenido del correo';

if(!$mail->send()) {
    echo 'El mensaje no pudo ser enviado.';
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo 'El mensaje ha sido enviado.';
}
?>
