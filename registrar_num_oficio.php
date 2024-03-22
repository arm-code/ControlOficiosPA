<?php
@$num_oficio=$_POST['num_oficio'];
@$fecha=$_POST['fecha'];
@$nombre_dirigido=$_POST['nombre_dirigido'];
@$concepto=$_POST['concepto'];
@$autorizo=$_POST['autorizo'];
@$solicito=$_POST['solicito'];

/**/ 

$servername = "localhost";
$database = "oficios";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect("localhost","root","","oficios");
$consulta = "insert into num_oficios values ('$num_oficio' , '$fecha' , '$nombre_dirigido','$concepto' , '$autorizo' , '$solicito')";

$resultado= mysqli_query($conn,$consulta);

 if($resultado){
        echo "Datos agregados correctamente";
        header("Location: ver_num_oficios.php");
 }
 else{
    echo "Error al ingresar los datos";
    
 }

mysqli_close($conn);
