<?php
//@$id=$_POST['id'];
//@$num_oficio=$_POST['num_oficio'];
//@$fecha=$_POST['fecha'];
@$nombre_dirigido=$_POST['nombre_dirigido'];
@$concepto=$_POST['concepto'];
//@$autorizo=$_POST['autorizo'];
//@$solicito=$_POST['solicito'];
  include 'menu.php';
        $servidor="localhost";
        $usuario="root";
        $password="";
        $db="oficios";

        $conexion= new mysqli($servidor,$usuario,$password,$db);

        if ($conexion->connect_error) {
            die("conexion fallida" . $conexion->connect_error);
        }
        
        @$id=$_GET['id'];
    
        $sql="SELECT * FROM num_oficios where id = '$id'";
        $resultado=$conexion->query($sql);
            while($row= $resultado->fetch_assoc()){
              
                //@$num_oficio=$_POST['num_oficio'];
                //@$fecha=$_POST['fecha'];
                @$nombre_dirigido=$_POST['nombre_dirigido'];
                @$concepto=$_POST['concepto'];
                //@$autorizo=$_POST['autorizo'];
                //@$solicito=$_POST['solicito'];
    }
    
    

?>
<?php
        @$nombre_dirigido2=$_POST["nombre_dirigido"];
        @$concepto2=$_POST["concepto"];
      

        if (isset($_POST['id'])){
                $sql="UPDATE num_oficios SET nombre_dirigido=$nombre_dirigido2, concepto='$concepto2' where id='$id' ";
                if($conexion->query($sql) === true){
                    echo("Actualización correcta");
                    header("Location: ver_num_oficios.php");
                }
                else{
                    die("ERROR: " . $conexion->error);
                }
        }
        
        $conexion->close();
?>
