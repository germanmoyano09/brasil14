<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<title> Mundial </title>    
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Germán Moyano">
		
		<link href="css/css.css" rel="stylesheet">
	</head>
	<body> 
	<div align="center" style="width: 980px; margin: auto;margin-top:10px;margin-bottom: 10px">
		
		<!-- EMPIEZO CUARTOS DE FINAL -->
		<?php 
			if($_POST['cuartospartido1'] == '1a')
				$ganadorpartido1= $_POST['semis1a'];
			else
				$ganadorpartido1= $_POST['semis1b'];
			
			if($_POST['cuartospartido2'] == '1a')
				$ganadorpartido2= $_POST['semis2a'];
			else
				$ganadorpartido2= $_POST['semis2b'];
				
				echo $ganadorpartido1."<br>";
				echo $ganadorpartido2."<br>";
		?>
	
	</div>
	</body>
</html>	
		