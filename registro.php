<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "sialcis";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (isset($_POST['Registro'])) {
    $Nombre = $_POST['Nombre'];
    $Apellidos = $_POST['Apellidos'];
    $Correo = $_POST['Correo'];
    $Contraseña = $_POST['Contraseña'];
    $confirmarContraseña = $_POST['confirmarContraseña'];

    // Verificar si las contraseñas coinciden
    if ($Contraseña !== $confirmarContraseña) {
        echo "Las contraseñas no coinciden. Por favor, inténtelo de nuevo.";
    } else {
        // Verificar si el correo ya está en uso
        $consultaCorreo = "SELECT * FROM login WHERE Correo = '$Correo'";
        $resultado = mysqli_query($enlace, $consultaCorreo);
        if (mysqli_num_rows($resultado) > 0) {
            echo "El correo electrónico '$Correo' ya está en uso. Por favor, elija otro.";
        } else {
            // Insertar datos en la tabla "login"
            $insertarDatosLogin = "INSERT INTO login (Correo, Contraseña) VALUES ('$Correo', '$Contraseña')";
            $ejecutarInsertarLogin = mysqli_query($enlace, $insertarDatosLogin);

            if ($ejecutarInsertarLogin) {
                // Insertar datos en la tabla "usuarios" si el registro en la tabla "login" fue exitoso
                $insertarDatosUsuarios = "INSERT INTO usuarios (Nombre, Apellidos, Correo) VALUES ('$Nombre', '$Apellidos', '$Correo')";
                $ejecutarInsertarUsuarios = mysqli_query($enlace, $insertarDatosUsuarios);

                if ($ejecutarInsertarUsuarios) {
                    echo "Datos insertados correctamente.";
                } else {
                    echo "Error al insertar datos en la tabla 'usuarios': " . mysqli_error($enlace);
                }
            } else {
                echo "Error al insertar datos en la tabla 'login': " . mysqli_error($enlace);
            }
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="registro.css">
    <link rel="icon" href="img/icono.jpg">
</head>

<body>
    <form class="form" action="#" name="sialcis" method="post">
        <p class="title">Registro Usuario </p>
        <p class="message">Regístrese ahora y obtenga acceso completo a nuestra aplicación. </p>
        <div class="flex">
            <label>
                <input class="input" type="text" name="Nombre" placeholder="" required="">
                <span>Nombre</span>
            </label>

            <label>
                <input class="input" type="text" name="Apellidos" placeholder="" required="">
                <span>Apellido</span>
            </label>
        </div>
        <div class="fle">
            <label>
                <input class="input" type="email" name="Correo" placeholder="" required="">
                <span>Email</span>
            </label>

            <label>
                <input class="input" type="password" name="Contraseña" placeholder="" required="">
                <span>Password</span>
            </label>

            <label>
                <input class="input" type="password" name="confirmarContraseña" placeholder="" required="">
                <span>Confirmar password</span>
            </label>
        </div>
        
        <button class="submit" name="Registro">Registrar</button>
        <p class="signin">¿Ya tienes una cuenta? <a href="logueo.php">Iniciar sesión</a> </p>
    </form>
</body>

</html>