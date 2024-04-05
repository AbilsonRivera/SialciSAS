<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logueo</title>
    <link rel="stylesheet" href="logueo.css">
    <link rel="icon" href="img/icono.jpg" >
</head>
<body>
<div class="container">
        <div class="heading">Inicio de sesion</div>
            <form class="form" action="">
                <input
                    placeholder="E-mail"
                    id="email"
                    name="email"
                    type="email"
                    class="input"
                    required="" 
                    />
                <input
                    placeholder="Password"
                    id="password"
                    name="password"
                    type="password"
                    class="input"
                    required=""
                        />
                        <span class="forgot-password"><a href="#">Has olvidado tu contraseña ?</a></span>
                        <input value="Iniciar sesion" type="submit" class="login-button" />
            </form>
        <div class="social-account-container">
            <span class="title">O Inicia sesion con</span>
                <div class="social-accounts">
                    <button class="social-button google">
                        <svg
                            viewBox="0 0 488 512"
                            height="1em"
                            xmlns="http://www.w3.org/2000/svg"
                            class="svg"
                            >
                            <path
                                d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
                            ></path>
                        </svg>
                    </button>
                </div>
        </div>
        <span class="agreement"><a href="#">¿No tienes cuenta? Registrate</a></span>
</div>
</body>
</html>