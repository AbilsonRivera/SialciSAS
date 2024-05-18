<?php
    $mysqli = new mysqli("localhost", "root", "", "sialcis");

    if ($mysqli->connect_errno) {
        echo "Error al conectar a la base de datos: " . $mysqli->connect_error;
        exit();
    }

    $sql = "SELECT * FROM pedidos";
    $resultado = $mysqli->query($sql);

    $row = $resultado->fetch_array(MYSQLI_ASSOC);
?>

<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <h3 style="text-align:center">MODIFICAR REGISTRO</h3>
            </div>

            <form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
            <div class="form-group">
                <label for="id" class="col-sm-2 control-label">ID Pedidos</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" name="id" placeholder="ID Pedidos" value="<?php echo $row['Id_pedidos']; ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="id_usuario" class="col-sm-2 control-label">ID Usuario</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_usuario" name="id_usuario" placeholder="ID Usuario" value="<?php echo $row['Id_Usuario']; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="direccion_remitente" class="col-sm-2 control-label">Dirección Remitente</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="direccion_remitente" name="direccion_remitente" placeholder="Dirección Remitente" value="<?php echo $row['Direccion_Remi']; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="telefono_remitente" class="col-sm-2 control-label">Teléfono Remitente</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="telefono_remitente" name="telefono_remitente" oninput="this.value = this.value.replace(/[^0-9]/g, '');" placeholder="Teléfono Remitente" value="<?php echo $row['Telefono_Remi']; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="nombre_empresa_remitente" class="col-sm-2 control-label">Nombre Empresa Remitente</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre_empresa_remitente" name="nombre_empresa_remitente" placeholder="Nombre Empresa Remitente" value="<?php echo $row['NombreEmprese_Remi']; ?>" >
                </div>
            </div>

            <div class="form-group">
                <label for="id_mercancia" class="col-sm-2 control-label">ID Mercancia</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_mercancia" name="id_mercancia" placeholder="ID Mercancia" value="<?php echo $row['Id_Mercancia']; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="fecha" class="col-sm-2 control-label">Fecha</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $row['Fecha']; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="index.php" class="btn btn-default">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>

        </div>
    </body>
</html>
