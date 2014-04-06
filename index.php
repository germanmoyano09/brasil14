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
		<!-- FASE DE GRUPOS -->
		<?php
			//include("grupos.php"); 
		?>
		
		<!-- ACA EMPIEZO EL FORMULARIO -->
		<form name="formularioOctavos" action="cuartosdefinal.php" method="post">
			<!-- OCTAVOS DE FINAL -->
			<?php
				include("octavos.php"); 
			?>
		</form>	
		<!-- ACA TERMINO EL FORMULARIO-->
	</div>
	</body>
</html>