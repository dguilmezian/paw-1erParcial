<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="style.css">
	<title>Resultados de la Encuesta</title>
</head>

<body>
	<?php require 'nav.php' ?>

	<script>
		var array = [];
		var lenguajes = <?php echo $lenguajes; ?>;
		var encuestados = <?php echo $encuestados; ?>;
		for (var i = 0; i < lenguajes.length; i++) {
			var c=0;
			for(var j = 0; j<encuestados.length;j++){
				if(encuestados[j]['respuesta']==lenguajes[i]['nombre']){
					c++;
				}
			}
			array[i]=c;
			document.write("<div style='background-color:aliceblue'>Resultados del lenguaje " + lenguajes[i]['nombre'] +" es : "+c+ "</div>");
		}
		console.log(array);
	</script>

</html>