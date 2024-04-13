<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sialci.SAS</title>
    <link rel="icon" href="img/icono.jpg" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--Icon-Font-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link href="Usuario.css" rel="stylesheet">
</head>

<body class=" fondo">
    <!-- icono whatsapp -->
    <a href="https://wa.me/573204146958?text=Hola" class="btn-wsp" target="_blank">
        <i class="fa fa-whatsapp icono" style="font-size: 35px;"></i>
    </a>
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
                        <a class="nav-link mx-lg-2 " aria-current="page" href="#sialci">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 active" href="#productos">Envio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#contacto">Editar Informacion</a>
                    </li>
                </ul>
            </div>
        </div>
            <a href="Principal.php" class="login-button" >cerrar sesion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

    <section class="formulario">
        <div class="container" id="formularioContainer">
            <header>Registro de envío</header>
            <form action="#">
                <div class="form first">
                    <div class=" details personal">
                        <span class="title">Datos del remitente</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Nombre(s):</label>
                                <input type="text" name="nombre" placeholder="Ingrese su nombre"
                                    pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Por favor, ingrese solo letras" required>
                            </div>

                            <div class="input-field">
                                <label>Apellidos:</label>
                                <input type="text" name="nombre" placeholder="Ingrese su apellido"
                                    pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Por favor, ingrese solo letras" required>
                            </div>

                            <div class="input-field">
                                <label>Direccion</label>
                                <input type="text" placeholder="ingrese su Direccion" required>
                            </div>

                            <div class="input-field">
                                <label>Correo</label>
                                <input type="email" name="correo" placeholder="Ingrese su correo " required>
                            </div>

                            <div class="input-field">
                                <label>Telefono</label>
                                <input type="Number" placeholder="Ingrese su numero de telefono" required>
                            </div>

                            <div class="input-field">
                                <label>Nombre de la empresa (si aplica):</label>
                                <input type="text" name="empresa" placeholder="Ingrese nombre de la empresa">
                            </div>

                        </div>
                    </div>

                    <div class="details ID">
                        <span class="title">Mercancia</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Paquetes</label>
                                <input type="number" name="paquetes" placeholder="#-?" required>
                            </div>

                            <div class="input-field pesos">
                                <label>Peso</label>
                                <div class="input-group">
                                    <input type="Number" name="peso" placeholder="#" required>
                                    <select class="">
                                        <option value="lb">lb</option>
                                        <option value="kg">kg</option>
                                    </select>
                                </div>
                            </div>

                            <div class="input-field dimensiones">
                                <label>Dimensiones (LARGO X ANCHO X ALTURA EN CM)</label>
                                <div class="input-group">
                                    <input type="Number" class="form-control auto-width" placeholder="L" required>
                                    <span style="margin: 0px 4px;">x</span>
                                    <input type="Number" class="form-control auto-width" placeholder="A" required>
                                    <span style="margin: 0px 4px;">x</span>
                                    <input type="Number" class="form-control auto-width" placeholder="A" required>
                                    <span style="margin: 0px 4px;">CM</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="add-more">Agregar más</a>


                        <div class="details addres">
                            <span class="title">Datos del destinatario</span>

                            <div class="fields">
                                <div class="input-field">
                                    <label>Nombre Completo</label>
                                    <input type="text" placeholder="Ingrese Nombre" required>
                                </div>

                                <div class="input-field">
                                    <label>Nombre de la empresa (si aplica):</label>
                                    <input type="text" placeholder="Ingrese el nombre de la empresa" required>
                                </div>

                                <div class="input-field">
                                    <label>Pais</label>
                                    <input type="text" placeholder="Ingrese el pais" required>
                                </div>

                                <div class="input-field">
                                    <label>Ciudad</label>
                                    <input type="text" placeholder="Ingrese nombre de la ciudad" required>
                                </div>

                                <div class="input-field">
                                    <label>Codigo postal</label>
                                    <input type="number" placeholder="Ingrese codigo postal" required>
                                </div>

                                <div class="input-field">
                                    <label>Correo</label>
                                    <input type="email" placeholder="Ingrese el correo" required>
                                </div>

                                <div class="input-field">
                                    <label>Numero del telefono</label>
                                    <input type="number" placeholder="Ingrese el numero de telefono" required>
                                </div>

                            </div>
                        </div>
                        <button class="nextBtn">
                            <span class="btnText">Enviar</span>
                        </button>


                    </div>
                </div>

            </form>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    
</body>

</html>