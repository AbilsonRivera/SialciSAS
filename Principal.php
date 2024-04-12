<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIALCI.SAS</title>
    <link rel="icon" href="img/icono.jpg" >
    <link rel="stylesheet" href="principal1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--Icon-Font-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- icono whatsapp -->
    <a href="https://wa.me/573204146958?text=Hola" class="btn-wsp" target="_blank">
        <i class="fa fa-whatsapp icono" style="font-size: 35px;"></i>
    </a>
    <!-- video -->
    <video muted autoplay loop playsinline src="img/coffe.mp4" class="video" id="sialci"></video>
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
                        <a class="nav-link mx-lg-2" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
            <a href="logueo.php" class="login-button" >Iniciar sesion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

    <h1 id="productos" ><span>Productos que hemos Exportado</span></h1>

    <div class="d-flex justify-content-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" style="max-width: 1000px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/bolso2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/valdez.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/cafe.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <h1 id="productos" ><span>Origenes de nuestros Productos</span></h1>

    <div class="d-flex justify-content-center">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" style="max-width: 1000px;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <!-- Agrega botones indicadores para las imágenes adicionales -->
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/acevedo.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/garzon.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/cafe.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/Cafesub.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Fourth slide label</h5>
          <p>Some representative placeholder content for the fourth slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/valdez.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Fifth slide label</h5>
          <p>Some representative placeholder content for the fifth slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/bolso2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Sixth slide label</h5>
          <p>Some representative placeholder content for the sixth slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>



    <article>
        <div class="contenedorimg">
            <h1>Hola Mundo</h1>
            <p>Soy un parrafo </p>
        </div>
    </article>

    <div class="qr">
    <div class="text">
        <p>¡Escanea el código QR para contactarnos por WhatsApp!</p>
    </div>
    <div class="qr">
        <img id="contacto" src="img/qr.jpg" alt="Código QR de WhatsApp">
    </div>
</div>



    <footer class="bg-light text-dark pt-5 pb-4">
            <div class="container text-center text-md-start">
                <div class="row text-center text-md-start">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Nosotros</h5>
                        <hr class="mb-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore cum sit, architecto rerum suscipit illum officiis fugit maiores quo similique ipsam assumenda impedit voluptatem aspernatur id ducimus voluptatum tempore hic?</p>
                    </div>
                        <div class="col-md-2 col-lg-2 col-lx-2 mx-auto mt-3">
                            <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Dejanos</h5>
                            <hr class="mb-4">
                            <p>
                                <a href="#" class="text-dark">Tu Cuenta</a>
                            </p>
                            <p>
                                <a href="#" class="text-dark">Tus Ordenes</a>
                            </p>
                            <p>
                            <a href="#" class="text-dark">Manejo de Cuenta</a>
                            </p>
                            <p>
                            <a href="#" class="text-dark">Ayuda</a>
                            </p>
                        </div>
                        <div class="col-md-2 col-lg-2 col-lx-2 mx-auto mt-3">
                            <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Has dinero</h5>
                            <hr class="mb-4">
                            <p>
                                <a href="#" class="text-dark">Tu Cuenta</a>
                            </p>
                            <p>
                                <a href="#" class="text-dark">Tus Ordenes</a>
                            </p>
                            <p>
                            <a href="#" class="text-dark">Manejo de Cuenta</a>
                            </p>
                            <p>
                            <a href="#" class="text-dark">Ayuda</a>
                            </p>
                        </div>
                        <div class="col-md-2 col-lg-2 col-lx-2 mx-auto mt-3">
                            <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Contacto</h5>
                            <hr class="mb-4">
                            <p>
                                <li class="fas fa-home me-3"></li>Mexico,ciudad 255
                            </p>
                            <p>
                                <li class="fas fa-envelope me-3"></li>amaf@gmail.com
                            </p>
                            <p>
                                <li class="fas fa-phone me-3"></li>32056946457
                            </p>
                            <p>
                                <li class="fas fa-print me-3"></li>+5732056946457
                            </p>
                        </div>
                        <hr class="mb-4">
                        <div class="text-center mb-2">
                            <p>
                                Copyright Todos los derechos reservados
                                <a href="#">
                                    <strong class="text-primary" >test</strong>
                                </a>
                            </p>
                        </div>
                        <div class="text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-dark"><i class="fab fa-2x fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-dark"><i class="fab fa-2x fa-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
    </footer>
</body>
</html>