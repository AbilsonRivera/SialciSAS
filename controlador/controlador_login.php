<?php
session_start();

if (!empty($_POST["InicioSesion"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $Correo = $_POST["email"];
        $Contraseña = $_POST["password"];

        $sql = $conexion->query("SELECT * FROM login WHERE Correo='$Correo' AND Contraseña='$Contraseña'");

        if ($datos = $sql->fetch_object()) {
            $usuario_sql = $conexion->query("SELECT Id_Usuario FROM usuarios WHERE Correo='$Correo'");
            if ($usuario_datos = $usuario_sql->fetch_object()) {
                $_SESSION["id"] = $usuario_datos->Id_Usuario;
            }

            $_SESSION["nombre"] = $datos->Nombre;
            $_SESSION["apellido"] = $datos->Apellidos;
            $_SESSION["correo"] = $Correo;

            header("Location: Principal2.php");
            exit; 
        } else {
            echo '<script type="text/javascript">
                    $(document).ready(function(){
                        $("#errorModal").modal("show");
                    });
                  </script>';
        }
    } else {
        echo "Campos vacíos";
    }
}
?>
