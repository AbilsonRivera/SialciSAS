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

    if ($Contraseña !== $confirmarContraseña) {
        // Aquí eliminamos la línea que imprime el mensaje
    } else {
        // Verificar si el correo ya está en uso
        $consultaCorreo = "SELECT * FROM login WHERE Correo = '$Correo'";
        $resultado = mysqli_query($enlace, $consultaCorreo);
        if (mysqli_num_rows($resultado) > 0) {
            // Aquí eliminamos la línea que imprime el mensaje
        } else {
            
            $insertarDatosLogin = "INSERT INTO login (Correo, Contraseña) VALUES ('$Correo', '$Contraseña')";
            $ejecutarInsertarLogin = mysqli_query($enlace, $insertarDatosLogin);

            if ($ejecutarInsertarLogin) {
                // Insertar datos en la tabla "usuarios" si el registro en la tabla "login" fue exitoso
                $insertarDatosUsuarios = "INSERT INTO usuarios (Nombre, Apellidos, Correo) VALUES ('$Nombre', '$Apellidos', '$Correo')";
                $ejecutarInsertarUsuarios = mysqli_query($enlace, $insertarDatosUsuarios);

        
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form class="form" action="#" name="sialcis" method="post">
        <p class="title">Registro Usuario</p>
        <p class="message">Regístrese ahora y obtenga acceso completo a nuestra aplicación.</p>
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
        <p class="signin">¿Ya tienes una cuenta? <a href="logueo.php">Iniciar sesión</a></p>
    </form>

    <!-- Modal de error -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error de registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body error-modal-body">
                    <p id="errorMessage"></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            <?php
            if (isset($_POST['Registro'])) {
                $Nombre = $_POST['Nombre'];
                $Apellidos = $_POST['Apellidos'];
                $Correo = $_POST['Correo'];
                $Contraseña = $_POST['Contraseña'];
                $confirmarContraseña = $_POST['confirmarContraseña'];

                if ($Contraseña !== $confirmarContraseña) {
                    echo '$("#errorMessage").text("Las contraseñas no coinciden. Por favor, inténtelo de nuevo.");';
                    echo '$("#errorModal").modal("show");';
                } else {
                    // Verificar si el correo ya está en uso
                    $consultaCorreo = "SELECT * FROM login WHERE Correo = '$Correo'";
                    $resultado = mysqli_query($enlace, $consultaCorreo);
                    if (mysqli_num_rows($resultado) > 0) {
                        echo '$("#errorMessage").text("El correo electrónico \'' . $Correo . '\' ya está en uso. Por favor, elija otro.");';
                        echo '$("#errorModal").modal("show");';
                    } else {
                        $insertarDatosLogin = "INSERT INTO login (Correo, Contraseña) VALUES ('$Correo', '$Contraseña')";
                        $ejecutarInsertarLogin = mysqli_query($enlace, $insertarDatosLogin);

                        if ($ejecutarInsertarLogin) {
                            // Insertar datos en la tabla "usuarios" si el registro en la tabla "login" fue exitoso
                            $insertarDatosUsuarios = "INSERT INTO usuarios (Nombre, Apellidos, Correo) VALUES ('$Nombre', '$Apellidos', '$Correo')";
                            $ejecutarInsertarUsuarios = mysqli_query($enlace, $insertarDatosUsuarios);

                            if ($ejecutarInsertarUsuarios) {
                                echo '$("#errorMessage").text("Datos insertados correctamente.");';
                                echo '$("#errorModal").modal("show");';
                            } else {
                                echo '$("#errorMessage").text("Error al insertar datos en la tabla \'usuarios\'.");';
                                echo '$("#errorModal").modal("show");';
                            }
                        } else {
                            echo '$("#errorMessage").text("Error al insertar datos en la tabla \'login\'.");';
                            echo '$("#errorModal").modal("show");';
                        }
                    }
                }
            }
            ?>
        });
    </script>
</body>
</html>
