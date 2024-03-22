<?php
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/editar.css">
</head>

<body>	
	<form action="editar_num_oficio.php" method="POST" class="contenedor">			
		<input type="hidden" name="id" value="<?php echo  $_GET['id']; ?>">
		<div class="form-group">
			<div class="col-md-4">
				<label for="nombre_dirigido">A quien va dirigido</label>
				<input type="text" name="nombre_dirigido" id="nombre_dirigido" placeholder="nombre">
			</div>			
			<div class="form-group">
				<label for="concepto">Concepto</label>
				<input type="text" name="concepto" id="concepto" placeholder="concepto">
			</div>	
			<div class="form-group">
				<button id="actualizar" value="actualizar" name="actualizar" type="submit" class="btn btn-primary">Actualizar</button>
			</div>
					
		</div>
	</form>
</body>

</html>