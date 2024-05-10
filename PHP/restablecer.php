<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/logueo.css">
  <title>Recuperar Contraseña</title>
</head>
<body>
<div class="container">
        <div class="heading">Recuperar Contraseña</div>

        <form class="form" action="restablecer.php" name="sialcis" method="POST">

        <div class="form-floating my-3">
            <input type="email" class="form-control input" id="floatingInput" name="email" required=""/>
            <label for="floatingInput">Correo electrónico</label>
        </div>
            <input class="btn btn-primary login-button" type="submit" name="EnviarCorreo" value="Enviar Correo">
            <span class="agreement"><a href="logueo.php">Regresar</a></span>
        </form>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="successModalLabel">Correo Verificado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>El Correo de Recuperacion se ha enviado correctamente.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="errorModalLabel">Error</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p> Al enviar el correo electrónico</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="error" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="errorModalLabel">Error</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>El Correo que ingresaste no se encuentra registrado.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
    
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Bootstrap Bundle con Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

        <script>
    // Coloca aquí el código JavaScript para activar los modales
    $(document).ready(function() {
        <?php
        try {
            if(isset($_POST['email']) && !empty($_POST['email'])) {
                $pass = substr(md5(microtime()), 1, 10);
                $email = $_POST['email'];

                // Conexión con la base de datos
                $conn = new mysqli("localhost", "root", "", "sialci");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $check_sql = "SELECT * FROM login WHERE Correo='$email'";
                $result = $conn->query($check_sql);
                if ($result->num_rows > 0) {
                    // Actualiza la contraseña en la base de datos
                    $sql = "UPDATE login SET Contraseña='$pass' WHERE Correo='$email'";
                    if ($conn->query($sql) === TRUE) {
                        // Configuración del correo electrónico
                        $to = $email;
                        $subject = "Recordar contraseña";
                        $message = "El sistema le asignó la siguiente clave: " . $pass . "\r\n";
                        $message .= "Por favor copie la clave asignada y cuando inicie sesión de nuevo, cámbiela en la opción de editar información.\r\n";
                        $message .= "Haga click en el siguiente enlace para volver al formulario de inicio de sesión:\r\n";
                        $message .= "http://localhost/SIALCI.SAS/PHP/logueo.php"; 
                        $headers = "From: SIALCI-SAS@gmail.com\r\n";

                        // Envía el correo electrónico utilizando la función mail() de PHP
                        if (mail($to, $subject, $message, $headers)) {
                            echo '$("#successModal").modal("show");';
                        } else {
                            echo '$("#errorModal").modal("show");';
                        }
                    } else {
                        echo 'alert("Error modificando: ' . $conn->error . '");';
                    }
                } else {
                    echo '$("#error").modal("show");';
                }
                $conn->close();
            } 
        } catch (Exception $e) {
            echo 'alert("Excepción capturada: ' . $e->getMessage() . '");';
        }
        ?>
    });
</script>

</body>
</html>
