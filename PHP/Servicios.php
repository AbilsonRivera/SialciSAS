<?php 
session_start();
if (empty($_SESSION["id_usuario"])){
    header("location: logueo.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sialci.SAS</title>
    <link rel="icon" href="../img/icono.jpg" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--Icon-Font-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../CSS/Servicios.css" rel="stylesheet">
</head>

<body class="fondo">
    <!-- icono whatsapp -->
    <a href="https://wa.me/573204146958?text=Hola" class="btn-wsp" target="_blank">
        <i class="fa fa-whatsapp icono" style="font-size: 35px;"></i>
    </a>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand me-auto" href="#"> <img src="../img/icono.jpg" alt="icono de la pagina"  > </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SIALCI-SAS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 active" aria-current="page" href="Principal2.php">SIALCI SAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="Principal2.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#sialci">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="Usuario.php">Envio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#contacto">Informacion Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="Principal2.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
            <a href="../controlador/controlador_cerrar_session.php" class="login-button" >cerrar sesion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>


    <div class="parrafos">
        <div class="contenido">
            <i class="fa-solid fa-users"></i>
            <h3>Asesoria</h3>
            <p><Em>Apoyamos sus ventas internacionales desde su preparacion del producto hasta la entrega final a su
                    cliente.</Em></p>
        </div>
        <div class="contenido">
            <i class="fa-solid fa-truck"></i>
            <h3>Transporte terrestre</h3>
            <p><Em>Especializados en transporte de cualquier tipo de mercancia, desde carga hasta contenedores y carga
                    proyectos.</Em></p>
        </div>
        <div class="contenido">
        <i class="fa-solid fa-anchor"></i>
            <h3>Transporte maritimo</h3>
            <p><Em>Excelente fletes internacionales y gran cubrimiento a nivel mundial, encios FCL, LCL, BREAK BULL Y
                    carga proyecto.</em></p>
        </div>
        <div class="contenido">
        <i class="fa-solid fa-plane-departure"></i>
            <h3>Transporte Aereo</h3>
            <p><Em>Envía desde un simple sobre sobre hasta cargar proyecto para exportación via aerea</Em></p>
            
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>