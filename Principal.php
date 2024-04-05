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

    <section>
        <div class="container1">
            <div class="slider">
                <div class="slides" style="--img: url('img/cafe.jpg')" >
                    <div class="content1">
                    <h2>cafe 1</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit saepe laudantium facilis porro itaque</p>
                    </div>
                </div>
                <div class="slides" style="--img: url('img/dulces.jpg')" >
                    <div class="content1">
                    <h2>Dulce 2</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit saepe laudantium facilis porro itaque</p>
                    </div>
                </div>
                <div class="slides" style="--img: url('img/valdez.jpg')" >
                    <div class="content1">
                    <h2>Cafe 3</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit saepe laudantium facilis porro itaque</p>
                    </div>
                </div>
                <div class="slides" style="--img: url('img/bolsos.jpg')" >
                    <div class="content1">
                    <h2>Bolso 4</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit saepe laudantium facilis porro itaque</p>
                    </div>
                </div>
                <div class="slides" style="--img: url('img/bolso2.jpg')" >
                    <div class="content1">
                    <h2>Bolso 5</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit saepe laudantium facilis porro itaque</p>
                    </div>
                </div>
                <div class="slides" style="--img: url('img/valdez.jpg')" >
                    <div class="content1">
                    <h2>Cafe 6</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit saepe laudantium facilis porro itaque</p>
                    </div>
                </div>
            </div>
            <div class="buttons">
                    <span class="prev"></span>
                    <span class="next"></span>
            </div>
        </div>
        <script>
            let next = document.querySelector('.next');
            let prev = document.querySelector('.prev');
            let slider = document.querySelector('.slider');

            next.addEventListener('click', function(){
                let slides = document.querySelectorAll('.slides');
                slider.appendChild(slides[0]);
            })

            prev.addEventListener('click', function(){
                let slides = document.querySelectorAll('.slides');
                slider.prepend(slides[slides.length - 1]);
            })
        </script>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <article>
        <div class="contenedorimg">
            <h1>Hola Mundo</h1>
            <p>Soy un parrafo </p>
        </div>
    </article>

    <br><br><br><br><br>

    <div class="qr">
    <div class="text">
        <p>¡Escanea el código QR para contactarnos por WhatsApp!</p>
    </div>
    <div class="qr">
        <img id="contacto" src="img/qr.jpg" alt="Código QR de WhatsApp">
    </div>
</div>



    <footer>
    <div class="footer-col">
        <h4>Products</h4>
        <ul>
            <li><a href="#">Teams</a></li>
            <li><a href="#">Advertising</a></li>
            <li><a href="#">Talent</a></li>
        </ul>
    </div>
    <div class="footer-col">
        <h4>Network</h4>
        <ul>
            <li><a href="#">Technology</a></li>
            <li><a href="#">Science</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Professional</a></li>
            <li><a href="#">API</a></li>
        </ul>
    </div>
    <div class="footer-col">
        <h4>Company</h4>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Legal</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
    <div class="footer-col">
        <h4>Follow Us</h4>
        <div class="links">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</footer>
</body>
</html>