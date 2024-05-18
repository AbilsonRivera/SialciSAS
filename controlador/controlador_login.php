<?php
session_start();

$mysqli = new mysqli("localhost", "root", "", "sialcis");

if ($mysqli->connect_errno) {
    echo "Error al conectar a la base de datos: " . $mysqli->connect_error;
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST["email"];
    $contraseña = $_POST["password"];

    $stmt = $mysqli->prepare("SELECT * FROM admi WHERE email = ? AND contraseña = ?");
    $stmt->bind_param("ss", $correo, $contraseña);
    $stmt->execute();
    $resultado_admi = $stmt->get_result();

    $stmt = $mysqli->prepare("SELECT * FROM login WHERE Correo = ? AND Contraseña = ?");
    $stmt->bind_param("ss", $correo, $contraseña);
    $stmt->execute();
    $resultado_login = $stmt->get_result();

    if ($resultado_admi->num_rows === 1) {
        $_SESSION["tipo_usuario"] = "admin";
        $_SESSION["correo"] = $correo;
        header("Location: ../admi/index.php"); 
        exit;
    } elseif ($resultado_login->num_rows === 1) {
        $stmt = $mysqli->prepare("SELECT Id_Usuario FROM usuarios WHERE Correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $resultado_id = $stmt->get_result();
        $usuario = $resultado_id->fetch_assoc();
        
        $_SESSION["tipo_usuario"] = "usuario";
        $_SESSION["correo"] = $correo;
        $_SESSION["id_usuario"] = $usuario["Id_Usuario"]; 
        header("Location: Principal2.php"); 
        exit;
    } else {
        echo '<script type="text/javascript">
                $(document).ready(function(){
                    $("#errorModal").modal("show");
                });
              </script>';
    }
    $stmt->close();
}
?>
