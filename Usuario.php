<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sialci.SAS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="Usuario.css" rel="stylesheet"">
    <link rel=" stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/thinline.css">
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

        </section>
    </nav>
    </section>
    </nav>
    <section class="formulario">
        <div class="container">
            <header>Registration</header>
            <form action="#">
                <div class="form first">
                    <div class=" details personal">
                        <span class="title">Personal Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>full Name</label>
                                <input type="text" placeholder="Enter your name" required>
                            </div>

                            <div class="input-field">
                                <label>Date of birth</label>
                                <input type="date" placeholder="Enter birth date" required>
                            </div>

                            <div class="input-field">
                                <label>Email</label>
                                <input type="text" placeholder="Enter your email" required>
                            </div>

                            <div class="input-field">
                                <label>Mobile Number</label>
                                <input type="Number" placeholder="Enter mobile numbe" required>
                            </div>

                            <div class="input-field">
                                <label>gender</label>
                                <input type="text" placeholder="Enter your gender" required>
                            </div>

                            <div class="input-field">
                                <label>Occupation</label>
                                <input type="text" placeholder="Enter your occupation" required>
                            </div>
                        </div>
                    </div>

                    <div class="details ID">
                        <span class="title">Identity Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>ID Type</label>
                                <input type="text" placeholder="Enter ID type" required>
                            </div>

                            <div class="input-field">
                                <label>ID Number</label>
                                <input type="date" placeholder="Enter ID number" required>
                            </div>

                            <div class="input-field">
                                <label>Issued Date</label>
                                <input type="text" placeholder="Enter Issued date" required>
                            </div>

                            <div class="input-field">
                                <label>Mobile Number</label>
                                <input type="Number" placeholder="Enter mobile numbe" required>
                            </div>

                            <div class="input-field">
                                <label>gender</label>
                                <input type="text" placeholder="Enter your gender" required>
                            </div>

                            <div class="input-field">
                                <label>Occupation</label>
                                <input type="text" placeholder="Enter your occupation" required>
                            </div>
                        </div>
                        <button class="nextBtn">
                            <span class="btnText">Next</span>
                            <i class="uil uil-navigator"></i>
                        </button>


                    </div>
                </div>

                <div class="form second">
                    <div class=" details addres">
                        <span class="title">addres Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>addres Type</label>
                                <input type="text" placeholder="Enter addres type" required>
                            </div>

                            <div class="input-field">
                                <label>Nationality</label>
                                <input type="text" placeholder="Enter nationality" required>
                            </div>

                            <div class="input-field">
                                <label>state</label>
                                <input type="text" placeholder="Enter you state" required>
                            </div>

                            <div class="input-field">
                                <label>distric</label>
                                <input type="text" placeholder="Enter your dustric" required>
                            </div>

                            <div class="input-field">
                                <label>block number</label>
                                <input type="number " placeholder="Enter block number" required>
                            </div>

                            <div class="input-field">
                                <label>ward number</label>
                                <input type="number" placeholder="Enter yourward" required>
                            </div>
                        </div>
                    </div>

                    <div class=" details family">
                        <span class="title">family</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>father name</label>
                                <input type="text" placeholder="Enter father" required>
                            </div>

                            <div class="input-field">
                                <label>moder name</label>
                                <input type="text" placeholder="Enter mother" required>
                            </div>

                            <div class="input-field">
                                <label>grand father</label>
                                <input type="text" placeholder="Enter Issued date" required>
                            </div>

                            <div class="input-field">
                                <label>spous namer</label>
                                <input type="Number" placeholder="spose name" required>
                            </div>

                            <div class="input-field">
                                <label>gender</label>
                                <input type="text" placeholder="Enter your gender" required>
                            </div>

                            <div class="input-field">
                                <label>Occupation</label>
                                <input type="text" placeholder="Enter your occupation" required>
                            </div>
                        </div>
                        <div class="buttons">
                            <div class="backBtn">
                                <i class="uil uil-navigator"></i>
                                <span class="btnText">Back</span>
                            </div>

                            <button class="nextBtn">
                                <span class="btnText">Next</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>
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