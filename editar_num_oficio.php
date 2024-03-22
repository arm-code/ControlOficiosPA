<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    include 'db.php';

    // Obtener el ID del registro a actualizar
    $id = $_POST['id'];

    // Obtener los datos del formulario
    $nombre_dirigido = $_POST['nombre_dirigido'];
    $concepto = $_POST['concepto'];

    // Preparar la consulta SQL para actualizar el registro
    $sql = "UPDATE num_oficios SET nombre_dirigido=?, concepto=? WHERE id=?";

    // Preparar la sentencia
    $stmt = $conn->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("ssi", $nombre_dirigido, $concepto, $id);

    // Ejecutar la sentencia
    if ($stmt->execute()) {
        echo "Datos actualizados correctamente";
        header("Location: ver_num_oficios.php"); // Redirigir a la página de visualización de registros
        exit(); // Finalizar el script para evitar la ejecución de más código
    } else {
        echo "Error al actualizar los datos: " . $stmt->error;
    }

    // Cerrar la sentencia
    $stmt->close();
    // Cerrar la conexión
    $conn->close();
}

// @$id = $_GET['id'];

// $sql = "SELECT * FROM num_oficios where id = '$id'";
// $resultado = $conn->query($sql);
// while ($row = $resultado->fetch_assoc()) {
//     @$id = $_POST['id'];
//     @$num_oficio = $_POST['num_oficio'];
//     @$fecha = $_POST['fecha'];
//     @$nombre_dirigido = $_POST['nombre_dirigido'];
//     @$concepto = $_POST['concepto'];
//     @$autorizo = $_POST['autorizo'];
//     @$solicito = $_POST['solicito'];
// }



// @$nombre_dirigido2 = $_POST['nombre_dirigido'];
// @$concepto2 = $_POST['concepto'];


// if (isset($_POST['id'])) {
//     $consulta = "UPDATE num_oficios SET   nombre_dirigido='$nombre_dirigido2',concepto='$concepto2'  where id = '$id' ";
//     $resultado = mysqli_query($conn, $consulta);

//     if ($resultado) {
//         echo "Datos agregados correctamente";
//         header("Location: ver_num_oficios.php");
//     } else {
//         echo "Error al ingresar los datos";
//     }
// }
// $conn->close();
?>

