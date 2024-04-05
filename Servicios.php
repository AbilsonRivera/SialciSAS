<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sialci.SAS</title>

    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Enlace a tu archivo CSS personalizado -->
    <link href="Servicios.css" rel="stylesheet">
</head>

<body class="fondo">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#"><img src="img/icono.jpg"></a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">SIALCI SAS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 " aria-current="page" href="Usuario.php">Envío</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Editar información personal</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="out-button">Salir</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
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


    <!-- Scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Tu propio script JavaScript, si es necesario -->
</body>

</html>