<?php
session_start();

if (!empty($_POST["InicioSesion"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $Correo = $_POST["email"];
        $Contraseña = $_POST["password"];

        // Realizar consulta para verificar las credenciales en la tabla de login
        $sql = $conexion->query("SELECT * FROM login WHERE Correo='$Correo' AND Contraseña='$Contraseña'");

        if ($datos = $sql->fetch_object()) {
            // Buscar el ID del usuario en la tabla de usuario
            $usuario_sql = $conexion->query("SELECT Id_Usuario FROM usuarios WHERE Correo='$Correo'");
            if ($usuario_datos = $usuario_sql->fetch_object()) {
                // Establecer la sesión con el ID del usuario
                $_SESSION["id"] = $usuario_datos->Id_Usuario;
            }

            // Establecer otras variables de sesión si es necesario
            $_SESSION["nombre"] = $datos->Nombre;
            $_SESSION["apellido"] = $datos->Apellidos;
            $_SESSION["correo"] = $Correo;

            // Redirigir a la página de servicios
            header("Location: Servicios.php");
            exit; // Asegurarse de que el script se detenga después de la redirección
        } else {
            echo "Usuario o Contraseña incorrecto";
        }
    } else {
        echo "Campos vacíos";
    }
}
?>
