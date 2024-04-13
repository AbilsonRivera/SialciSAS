<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="registro.css">
    <link rel="icon" href="img/icono.jpg">
</head>

<body>
    <form class="form" action="#" name="sialcis" method="post">
        <p class="title">Editar Información </p>
        <?php

        ?>
        <div class="flex">
            <label>
                <input class="input" type="text" name="Nombre" placeholder="" required="">
                <span>Nombre</span>
            </label>

            <label>
                <input class="input" type="text" name="Apellidos" placeholder="" required="">
                <span>Apellido</span>
            </label>
        </div>
        <div class="fle">
            <label>
                <input class="input" type="email" name="Correo" placeholder="" required="">
                <span>Email</span>
            </label>

            <label>
                <input class="input" type="password" name="Contraseña" placeholder="" required="">
                <span>Password</span>
            </label>
        </div>
        
        <button class="submit" name="Registro">Editar</button>
        
    </form>
</body>

</html>