<?php
// Cargar la biblioteca PHPMailer usando Composer
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); // Instancia de PHPMailer

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();                                            // Usar SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Servidor SMTP de Gmail
    $mail->SMTPAuth   = true;                                   // Habilitar autenticación SMTP
    $mail->Username   = 'x7marquez@gmail.com';                   // Tu correo de Gmail
    $mail->Password   = 'Mprk1420';                        // Tu contraseña de Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Habilitar encriptación TLS, `ssl` también se puede usar
    $mail->Port       = 587;                                    // Puerto TCP para conectar

    // Destinatarios
    $mail->setFrom('x7marquez@gmail.com', 'Antonio Márquez');          // Remitente
    $mail->addAddress('x6marquez@gmail.com', 'Destinatario'); // Agregar destinatario
    //$mail->addAddress('otro@example.com');                    // Se pueden agregar más destinatarios
    //$mail->addReplyTo('info@example.com', 'Information');     // Dirección de respuesta
    //$mail->addCC('cc@example.com');                           // Añadir CC
    //$mail->addBCC('bcc@example.com');                         // Añadir BCC

    // Archivos adjuntos (opcional)
    //$mail->addAttachment('/var/tmp/file.tar.gz');             // Añadir archivos adjuntos
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');        // Nombre opcional

    // Contenido
    $mail->isHTML(true);                                        // Configurar el correo en formato HTML
    $mail->Subject = 'Aquí está el asunto';                     // Asunto del correo
    $mail->Body    = 'Este es el <b>contenido</b> del correo en HTML'; // Cuerpo del correo en HTML
    $mail->AltBody = 'Este es el contenido del correo en texto plano'; // Cuerpo del correo en texto plano para clientes que no soportan HTML

    $mail->send();                                              // Enviar el correo
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
}
?>
