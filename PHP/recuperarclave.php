<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once('../modelo/conexion.php');
$email = $_POST['email'];
$query = "SELECT * FROM login where Correo = '$email'";
$result = $conexion->query($query);
$row = $result->fetch_assoc();

if($result->num_rows > 0){
  $mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'alvaromauricioramirezquintero@gmail.com'; 
    $mail->Password   = 'Alvaromauricio2005'; 
    $mail->Port       = 587;

    $mail->setFrom('alvaromauricioramirezquintero@gmail.com', 'SIALCI-SAS'); 
    $mail->addAddress('alvaromauricioramirezquintero@gmail.com', 'Correo de prueba'); 
    $mail->isHTML(true);
    $mail->Subject = 'Recuperación de contraseña';
    $mail->Body    = 'Hola, este es un correo generado para solicitar tu recuperación de contraseña, por favor, visita la página de <a href="http://localhost/SIALCI.SAS/PHP/change_password.php">Recuperación de contraseña</a>';

    $mail->send();
    header("Location: logueo.php?message=ok");
} catch (Exception $e) {
  header("Location: logueo.php?message=error");
}

}else{
  header("Location: logueo.php?message=not_found");
}
?>
