<?php
include("db.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];
session_start();
$_SESSION['usuario'] = $usuario;


$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$password'";
$resultado = mysqli_query($conn, $consulta);

$filas = mysqli_num_rows($resultado);
if ($filas > 0) {
    header("location: home.php");
} else {
    include("index.php");
    echo "<h1 class='bad'>ERROR EN LA AUTENTIFICACIÓN</h1>";
}

mysqli_free_result($resultado); // Corregido a mysqli_free_result
mysqli_close($conn);
?>
