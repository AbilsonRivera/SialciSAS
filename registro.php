<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="registro.css">
    <link rel="icon" href="img/icono.jpg" >
</head>
<body>
<form class="form">
    <p class="title">Registro Usuario </p>
        <p class="message">Regístrese ahora y obtenga acceso completo a nuestra aplicación. </p>
            <div class="flex">
                <label>
                    <input class="input" type="text" placeholder="" required="">
                    <span>Nombre</span>
                </label>

                <label>
                    <input class="input" type="text" placeholder="" required="">
                    <span>Apellido</span>
                </label>
            </div>  
            <div class="fle">
                <label>
                    <input class="input" type="email" placeholder="" required="">
                    <span>Email</span>
                </label> 
        
                <label>
                    <input class="input" type="password" placeholder="" required="">
                    <span>Password</span>
                </label>

                <label>
                    <input class="input" type="password" placeholder="" required="">
                    <span>Confirmar password</span>
                </label>
            </div>
                <button class="submit">Registar</button>
                <p class="signin">Ya tienes una cuenta ? <a href="logueo.php">Iniciar sesion</a> </p>
</form>
</body>
</html>