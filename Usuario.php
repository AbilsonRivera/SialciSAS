<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sialci.SAS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="Usuario.css" rel="stylesheet">
</head>

<body class=" fondo">
    <nav class=" navbar navbar-expand-lg fixed-top">
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
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Shipment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Edit information</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="out-button">go out</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
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
                                <label>Dimensiones (en Centimetros)</label>
                                <div class="input-group">
                                    <input type="Number" class="form-control" style="width: 50px;" placeholder="Largo"
                                        required>
                                    <span style="margin: 0px 4px;">x</span>
                                    <input type="Number" class="form-control" style="width: 50px;" placeholder="Ancho"
                                        required>
                                    <span style="margin: 0px 4px;">x</span>
                                    <input type="Number" class="form-control" style="width: 50px;" placeholder="Alto"
                                        required>
                                    <span style="margin: 0 4px;">cm</span>
                                </div>
                            </div>



                            <div class="details addres">
                                <span class="title">Detalles de la dirección</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>Tipo de dirección</label>
                                        <input type="text" placeholder="Ingrese tipo de dirección" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Nacionalidad</label>
                                        <input type="text" placeholder="Ingrese su nacionalidad" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Estado</label>
                                        <input type="text" placeholder="Ingrese su estado" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Distrito</label>
                                        <input type="text" placeholder="Ingrese su distrito" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Número de bloque</label>
                                        <input type="number" placeholder="Ingrese número de bloque" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Número de guardia</label>
                                        <input type="number" placeholder="Ingrese su número de guardia" required>
                                    </div>
                                    <div class="details family">
                                        <span class="title">Familia</span>

                                        <div class="fields">
                                            <div class="input-field">
                                                <label>Nombre del padre</label>
                                                <input type="text" placeholder="Ingrese nombre del padre" required>
                                            </div>

                                            <div class="input-field">
                                                <label>Nombre de la madre</label>
                                                <input type="text" placeholder="Ingrese nombre de la madre" required>
                                            </div>

                                            <div class="input-field">
                                                <label>Nombre del abuelo</label>
                                                <input type="text" placeholder="Ingrese nombre del abuelo" required>
                                            </div>
                                        </div>

                                    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>