<?php
$nom_dependencia=$_POST['nom_dependencia'];
$num_oficio=$_POST['num_oficio'];
$fecha=$_POST['fecha'];
$fecha_rec=$_POST['fecha_rec'];
$respuesta=$_POST['respuesta'];
$res_num_oficio=$_POST['res_num_oficio'];
$fecha_alt=$_POST['fecha_alt'];
$dirigido=$_POST['dirigido'];
$lugar=$_POST['lugar'];

/**/ 

$servername = "localhost";
$database = "oficios";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect("localhost","root","","oficios");
$consulta = "insert into oficios_entrantes values ('$nom_dependencia' , '$num_oficio' , '$fecha' , '$fecha_rec' , '$respuesta' , '$res_num_oficio' , '$fecha_alt' , '$dirigido' , '$lugar')";

$resultado= mysqli_query($conn,$consulta);

 if($resultado){
        echo "Datos agregados correctamente";
        header("Location: ver_oficios.php");
 }
 else{
    echo "Error al ingresar los datos";
    
 }

mysqli_close($conn);
