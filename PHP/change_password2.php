<?php 
require_once('../modelo/conexion.php');
$pass = $_POST['new_password'];

$query = "UPDATE login set Contraseña= '$pass'";
$conexion->query($query);

header("Location: logueo.php?message=success_password");

?>