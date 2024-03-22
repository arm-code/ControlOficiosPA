
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Oficios</title>
    <link href="css/menu.css" rel="stylesheet">
</head>
<body>
<?php 
  include 'menu.php';
?>
<br>

<div>
    <h1>Registro de oficios que llegan al SPAyT</h1>
</div>
<form action="registrar.php" method="post">
<div class="col-md-4">
		<label for="nom_dependencia">Nombre de la dependencia </label>
		<input type="text" name="nom_dependencia" id="nom_dependencia" placeholder="Nombre de la Dependecia">
	</select>
	</div>
    <br>



<div class="col-md-4">
		<label for="Número de oficio">Número de oficio</label>
		<input type="text" name="num_oficio" id="num_oficio" placeholder="Número de oficio">
	</select>
	</div>
<br>


<div class="col-md-4">
		<label for="Fecha">Fecha</label>
		<input type="date" name="fecha" id="fecha" placeholder="Fecha">
	</select>
	</div>
<br>


<div class="col-md-4">
		<label for="Fecha">Fecha de recepción</label>
		<input type="date" name="fecha_rec" id="fecha_rec" placeholder="Fecha de recepción">
	</select>
	</div>
<br>

<div class="col-md-4">
		<label for="respuesta">Requiere Respuesta</label>
		<select class="form-control" id="respuesta" name="respuesta" required>
		<option value="">Elige una opción...</option>
		<option value="Si">Si</option>
		<option value="No">No</option>
	</select>
	</div>
<br>


<div class="col-md-4">
		<label for="Número de oficio">Respuesta con número de oficio</label>
		<input type="text" name="res_num_oficio" id="res_num_oficio" placeholder="Respuesta número de oficio">
	</select>
	</div>
<br>


<div class="col-md-4">
		<label for="Fecha">Fecha</label>
		<input type="date" name="fecha_alt" id="fecha_alt" placeholder="Fecha">
	</select>
	</div>
<br>

<div class="col-md-4">
		<label for="Dirigido a:">Dirigido a:</label>
		<input type="text" name="dirigido" id="dirigido" placeholder="dirigido">
	</select>
	</div>
<br>


<div class="col-md-4">
		<label for="lugar">Oficio que llega al SPAyT</label>
		<select class="form-control" id="lugar" name="lugar" required>
		<!--<option value="">Elige una opción...</option>-->
		<option value="Llego">Llego el oficio</option>
		<!--<option value="Se mando">Se mando el oficio</option>-->
	</select>
	</div>
<br>


    

    <div class="row" style="margin-top: 1em;">
	<div class="col-md-4 col-12-small">
		<input id="Agregar" value="Agregar" name="btnAceptar" type="submit">
	</div>
	</div>
</form>
</body>
</html>
