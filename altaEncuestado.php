<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="style.css">
	<title>Nuevo Encuestado</title>
</head>

<body>
	<?php require 'nav.php' ?>
	<form action="save.php" method="post" class="container">
		<label for="nombre">Nombre:</label>
		<input type="text" placeholder="Daniel" name="nombre" required>
		<br>
		<label for="apellido">Apellido:</label>
		<input type="text" placeholder="Guilmezian" name="apellido" required>
		<br>
		<label for="email">Email:</label>
		<input type="email" name="email" placeholder="dguilmezian@gmail.com" required>
		<br>
		<select id="nombreLenguaje"  name="nombreLenguaje" required onChange="deshabilitar();">
			<?php foreach ($lenguajes as $row) {
				echo "<option value=" . $row['nombre'] . ">" . $row['nombre'] . "</option>";
			} ?>
			<option value="otro">Otro</option>
		</select>
		<br>
		<input type="text" name="otroLenguaje" id="otroLenguaje" required disabled="true">
		<br>
		<input type="submit" name="boton" value="Enviar">
	</form>
	<?php
    if (isset($_POST["email"])) {
      require 'summary.php';
    }
    ?>
	<script>
		function deshabilitar() {
			if (document.getElementById('nombreLenguaje').value == "otro") {
				document.getElementById('otroLenguaje').disabled = false;
			} else {
				document.getElementById('otroLenguaje').disabled = true;
			}
		}
	</script>
</body>

</html>