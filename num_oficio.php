
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="css/menu.css" rel="stylesheet">
</head>
<body>
<?php 
  include 'menu.php';
?>
<br>
<form action="registrar_num_oficio.php" method="post">
<div>
    <h1>Número de oficios</h1>
</div>
<div class="col-md-4">
		<label for="Número de oficio">Número de oficio</label>
		<input type="text" name="num_oficio" id="num_oficio" placeholder="Número de oficio">
	</select>
	</div><br>
    <div class="col-md-4">
		<label for="Número de oficio">Fecha</label>
		<input type="date" name="fecha" id="fecha" placeholder="fecha">
	</select>
	</div><br>

<div class="col-md-4">
		<label for="Dirigido a:">A quien esta dirigido</label>
		<input type="text" name="nombre_dirigido" id="nombre_dirigido" placeholder="Nombre dirigido">
	</select>
	</div>
<br>
<div class="col-md-4">
		<label for="Dirigido a:">Concepto</label>
		<input type="text" name="concepto" id="concepto" placeholder="Concepto">
	</select>
	</div>
<br>
<div class="col-md-4">
		<label for="lugar">Autorizó</label>
		<select class="form-control" id="autorizo" name="autorizo" required>
		<!--<option value="">Elige una opción...</option>-->
		<option value="ING. OLIVAS">ING. OLIVAS</option>
		<option value="NO SE UTILIZÓ">NO SE UTILIZÓ</option>
		<!--<option value="Se mando">Se mando el oficio</option>-->
	</select>
	</div>
<br>
<div class="col-md-4">
		<label for="Dirigido a:">SOLICITÓ</label>
		<input type="text" name="solicito" id="solicito" placeholder="solicito">
	</select>
	</div>
<br>
<div class="row" style="margin-top: 1em;">
	<div class="col-md-4 col-12-small">
		<input id="Agregar" value="Agregar" name="btnAceptar" type="submit">
	</div>
	</div>
</body>
</html>
