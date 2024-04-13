<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "sialcis";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['InicioSesion'])) {
    $Correo = $_POST['email'];
    $Contraseña = $_POST['password'];
    
    $Correo = mysqli_real_escape_string($enlace, $Correo);
    $Contraseña = mysqli_real_escape_string($enlace, $Contraseña);

    $consultaUsuario = "SELECT * FROM login WHERE Correo = '$Correo' AND Contraseña = '$Contraseña'";
    $resultado = mysqli_query($enlace, $consultaUsuario);

    // 
    if (mysqli_num_rows($resultado) == 1) {

        header("Location: Servicios.php");
        exit();
    } else {
        echo '<script type="text/javascript">
                    $(document).ready(function(){
                        $("#errorModal").modal("show");
                    });
              </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logueo</title>
    <link rel="stylesheet" href="logueo.css">
    <link rel="icon" href="img/icono.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            max-width: 400px;
            padding: 20px;
            margin: 100px auto; 
        }
        .heading {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .input {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .forgot-password {
            font-size: 14px;
            display: block;
            margin-bottom: 10px;
        }
        .login-button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-button:hover {
            background-color: #0056b3;
        }
        .social-account-container {
            margin-top: 20px;
        }
        .agreement {
            font-size: 14px;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">Inicio de sesión</div>
        <form class="form" action="#" name="sialcis" method="post">
            <input placeholder="E-mail" id="email" name="email" type="email" class="input" required="" />
            <input placeholder="Contraseña" id="password" name="password" type="password" class="input" required="" />
            <span class="forgot-password"><a href="#">¿Olvidaste tu contraseña?</a></span>
            <button class="btn btn-primary login-button" type="submit" name="InicioSesion">Iniciar sesión</button>
        </form>
        <div class="social-account-container">
            <span class="title">O inicia sesión con</span>
            <div class="social-accounts">
                <button class="social-button google">
                    <svg viewBox="0 0 488 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="svg">
                        <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                    </svg>
                </button>
            </div>
        </div>
        <span class="agreement"><a href="registro.php">¿No tienes cuenta? Regístrate</a></span>
    </div>

    <!-- Modal de error -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error de inicio de sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Correo electrónico o contraseña incorrectos. Por favor, inténtalo de nuevo.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            <?php
                if (isset($_POST['InicioSesion'])) {
                    $Correo = $_POST['email'];
                    $Contraseña = $_POST['password'];
                    
                    $Correo = mysqli_real_escape_string($enlace, $Correo);
                    $Contraseña = mysqli_real_escape_string($enlace, $Contraseña);
            
                    $consultaUsuario = "SELECT * FROM login WHERE Correo = '$Correo' AND Contraseña = '$Contraseña'";
                    $resultado = mysqli_query($enlace, $consultaUsuario);
            
                    if (mysqli_num_rows($resultado) != 1) {
                        echo '$("#errorModal").modal("show");';
                    }
                }
            ?>
        });
    </script>
</body>
</html>
