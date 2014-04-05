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
		<form name="formularioOctavos" action="index.php" method="post">
			<!-- OCTAVOS DE FINAL -->
			<div id="contenido">
				<div id="infoequipo">
					OCTAVOS<br />
					*Horarios de Argentina<br />
				</div>
				
				<div id="grupooctavos">
					<span class="grupom">OCTAVOS</span>
					<br />
					<div id="contenedorm">
						<div id="paism">
							<img src="http://lh5.googleusercontent.com/-C318rUE6W3U/Ul_vWNwto4I/AAAAAAAAAe8/B7Rx-Dj5B_Y/s87/brasil.png" width="40px" height="50px"  /> <br />
							Brasil
						</div>
						
						<div id="paism">
							<img src="http://lh3.googleusercontent.com/-i6VRMg6IlX0/Ul_vXv3RT4I/AAAAAAAAAgA/lifZMtEUY-0/s73/espana.png" width="40px" height="50px"  /> <br />
							España
						</div>
						
						<div id="paism">
							<img src="http://lh5.googleusercontent.com/-k4bq8HA-RNE/UoxTAXijEAI/AAAAAAAAAj8/RCyxoNfivL0/s84/mexico.png" width="40px" height="50px"  /> <br />
							Mexico
						</div>
						
						<div id="paism">
							<img src="http://lh5.googleusercontent.com/-dolnTiZ8Nhw/Ul_vW1--EtI/AAAAAAAAAfQ/EFjCJO8xLNI/s71/colombia.png" width="40px" height="50px"  /> <br />
							Colombia
						</div>
					</div>
					
					<table width="100%">
						<tr>
							<td colspan="4">
								<div id="titulom"> Sabado 28 Junio 13:00 hs Belo Horizonte</div>
							</td>
						</tr>
						<tr>
							<td> 1ºGrupo A </td>
							<td> Ganador </td>
							<td> 2ºGrupo B </td>								
						</tr>
						<tr>
							<td style="width: 45%">
								<SELECT NAME="1grupoa" SIZE=1 required>
									<OPTION VALUE="Brasil">Brasil</OPTION>
									<OPTION VALUE="México">México</OPTION>
									<OPTION VALUE="Croacia">Croacia</OPTION>
									<OPTION VALUE="Camerún">Camerún</OPTION> 
								</SELECT>
							</td>
							
							<td>
								<input type="radio" name="group1" value="1a" required> 
								<input type="radio" name="group1" value="2b"> 
								<!-- <td style="width: 5%;background: white"></td> -->
							</td>
							
							<td style="width: 45%">
								<SELECT NAME="2grupob" SIZE=1 >
									<OPTION VALUE="España">España</OPTION>
									<OPTION VALUE="Holanda">Holanda </OPTION>
									<OPTION VALUE="Chile">Chile</OPTION>
									<OPTION VALUE="Australia">Australia </OPTION> 
								</SELECT>
							</td>
						</tr> 
						
						<tr colspan="4">
							<td>
								<br />
							</td>
						</tr>
						
						<!-- segundo partido -->
						
						<tr>
							<td colspan="4">
								<div id="titulom"> Sabado 28 Junio 17:00 hs Río de Janeiro</div>
							</td>
						</tr>
						<tr>
							<td> 1ºGrupo C </td>
							<td> Ganador </td>
							<td> 2ºGrupo D </td>								
						</tr>
						<tr>
							<td style="width: 45%">
								<SELECT NAME="1grupoc" SIZE=1 required>
									<OPTION VALUE="Brasil">Brasil</OPTION>
									<OPTION VALUE="México">México</OPTION>
									<OPTION VALUE="Croacia">Croacia</OPTION>
									<OPTION VALUE="Camerún">Camerún</OPTION> 
								</SELECT>
							</td>
							
							<td>
								<input type="radio" name="group1" value="1a" required> 
								<input type="radio" name="group1" value="2b"> 
								<!-- <td style="width: 5%;background: white"></td> -->
							</td>
							
							<td style="width: 45%">
								<SELECT NAME="2grupob" SIZE=1 >
									<OPTION VALUE="España">España</OPTION>
									<OPTION VALUE="Holanda">Holanda </OPTION>
									<OPTION VALUE="Chile">Chile</OPTION>
									<OPTION VALUE="Australia">Australia </OPTION> 
								</SELECT>
							</td>
						</tr> 
						
						<tr colspan="4">
							<td>
								<br />
							</td>
						</tr>
						
					</table>
						
				</div>
					
			</div>
		
			<input type="submit" value="Enviar">
			<input type="reset" value="Restablecer">
		</form>	
		<!-- ACA TERMINO EL FORMULARIO-->
		
		<!-- -->
		<?php 
		if (isset($_POST['group1'])){
			if($_POST['group1'] == '1a')
				echo "gano ".$_POST['1grupoa'];
			else
				echo"gano ".$_POST['2grupob'];
		}
		
		
		?>
		<div id="contenido">
		
		</div>
		
	</div>
	</body>
</html>