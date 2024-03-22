<?php
$d=$_POST['d'];
$num_oficio=$_POST['num_oficio'];
$anio=$_POST['anio'];
$fecha=$_POST['fecha'];
$personal=$_POST['personal'];


/**/ 

$servername = "localhost";
$database = "oficios";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect("localhost","root","","oficios");
$consulta = "INSERT into oficios_salen values ('$d' , '$num_oficio' , '$anio' , '$fecha' , '$personal')";

$resultado= mysqli_query($conn,$consulta);

 if($resultado){
        echo "Datos agregados correctamente";
        header("Location: ver_oficios_salen.php");
 }
 else{
    echo "Error al ingresar los datos";
    
 }

mysqli_close($conn);
