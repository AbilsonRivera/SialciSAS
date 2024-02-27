<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIALCI.SAS</title>
    <link rel="icon" href="img/icono.jpg" >
    <link rel="stylesheet" href="principal1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--Icon-Font-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body >
    <!-- icono whatsapp -->
    <a href="https://wa.me/573204146958?text=Hola" class="btn-wsp" target="_blank">
        <i class="fa fa-whatsapp icono" style="font-size: 35px;"></i>
    </a>
    <!-- video -->
    <video muted autoplay loop src="img/principal.mp4" class="video" id="sialci" ></video>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand me-auto" href="#"> <img src="img/icono.jpg" alt="icono de la pagina"  > </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SIALCI-SAS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 active" aria-current="page" href="#sialci">SIALCI SAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
            <a href="#" class="login-button" >Iniciar sesion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<div class="ful-img" id="fulImgBox">
        <img src="img/bizcocho .jpg" id="fulImg" alt="">
        <span onclick="closeImg()">X</span>
    </div>

    <h1 id="productos" ><span>Productos que hemos importado</span></h1>

    <div class="img-gallery">
        <img src="img/bizcocho .jpg" onclick="openFulImg(this.src)" alt="">
        <img src="img/bolso2.jpg" onclick="openFulImg(this.src)" alt="">
        <img src="img/bolsos.jpg" onclick="openFulImg(this.src)" alt="">
        <img src="img/cafe.jpg" onclick="openFulImg(this.src)" alt="">
        <img src="img/valdez.jpg" onclick="openFulImg(this.src)" alt="">
        <img src="img/dulces.jpg" onclick="openFulImg(this.src)" alt="">
    </div>
    <script src="slider.js"></script>
</body>
</html>