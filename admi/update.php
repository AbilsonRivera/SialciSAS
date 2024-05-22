<?php

$mysqli = new mysqli("localhost", "root", "", "sialci");

if ($mysqli->connect_errno) {
    echo "Error al conectar a la base de datos: " . $mysqli->connect_error;
    exit();
}

    $id = $_POST['id'];
    $correo_Usua = $_POST['correo_Usua'];
    $direccion_remitente = $_POST['direccion_remitente'];
    $telefono_remitente = $_POST['telefono_remitente'];
    $nombre_empresa_remitente = $_POST['nombre_empresa_remitente'];
    $id_mercancia = $_POST['id_mercancia'];
    $fecha = $_POST['fecha'];


    $sql = "UPDATE pedidos SET 
            correo_Usua='$correo_Usua',
            direccion_Remi='$direccion_remitente', 
            telefono_Remi='$telefono_remitente', 
            nombreempresa_Remi='$nombre_empresa_remitente', 
            id_Mercancia='$id_mercancia', 
            fecha='$fecha' 
        WHERE id_pedidos = '$id'";


            $resultado = $mysqli->query($sql);
?>

<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../img/icono.jpg">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="row" style="text-align:center">
                    <?php if($resultado) { ?>
                        <h3>REGISTRO MODIFICADO</h3>
                    <?php } else { ?>
                        <h3>ERROR AL MODIFICAR</h3>
                    <?php } ?>
                    
                    <a href="index.php" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>
    </body>
</html>
