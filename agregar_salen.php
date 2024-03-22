
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Oficios que salen del SPAyT</title>
    <link href="css/menu.css" rel="stylesheet">
</head>
<body>
<?php 
  include 'menu.php';
?>
<br>
<div>
    <h1>Registro de oficios que salen del SPAyT</h1>
</div>
<form action="registrar_salen.php" method="post">
<div class="col-md-4">
		<label for="Escriba el nombre de la dependecia">Escriba el nombre de la dependecia</label>
        <input type="text" name="d" id="d" placeholder="Nombre de dependencia">
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
		<label for="lugar">Año del oficio</label>
		<select class="form-control" id="anio" name="anio" required>

		<option value="2024">2024</option>

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
		<label for="Dirigido a:">personal que lo elaboro</label>
		<input type="text" name="personal" id="personal" placeholder="Quien lo pidio">
	</select>
	</div>
<br>



<br>


    

    <div class="row" style="margin-top: 1em;">
	<div class="col-md-4 col-12-small">
		<input id="Agregar" value="Agregar" name="btnAceptar" type="submit">
	</div>
	</div>
</form>
</body>
</html>
