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
			if($_POST['octavospartido1'] == '1a')
				$ganadorpartido1= $_POST['1grupoa'];
			else
				$ganadorpartido1= $_POST['2grupob'];
			
			if($_POST['octavospartido2'] == '1a')
				$ganadorpartido2= $_POST['1grupoc'];
			else
				$ganadorpartido2= $_POST['2grupod'];
			
			if($_POST['octavospartido3'] == '1a')
				$ganadorpartido3= $_POST['1grupoe'];
			else
				$ganadorpartido3= $_POST['2grupof'];

			if($_POST['octavospartido4'] == '1a')
				$ganadorpartido4= $_POST['1grupog'];
			else
				$ganadorpartido4= $_POST['2grupoh'];
			
			//partidos del lado derecho
			if($_POST['octavospartido5'] == '1a')
				$ganadorpartido5= $_POST['1grupob'];
			else
				$ganadorpartido5= $_POST['2grupoa'];
			
			if($_POST['octavospartido6'] == '1a')
				$ganadorpartido6= $_POST['1grupod'];
			else
				$ganadorpartido6= $_POST['2grupoc'];
			
			if($_POST['octavospartido7'] == '1a')
				$ganadorpartido7= $_POST['1grupof'];
			else
				$ganadorpartido7= $_POST['2grupoe'];
			
			if($_POST['octavospartido8'] == '1a')
				$ganadorpartido8= $_POST['1grupoh'];
			else
				$ganadorpartido8= $_POST['2grupog'];
		?>
		<div id="contenido">
			<div id="contenido">
	<div id="infoequipo">
		CUARTO DE FINAL<br />
		*Horarios de Argentina<br />
	</div>
	
	<div id="grupocuartos">
		<span class="grupom">CUARTOS DE FINAL</span>
		<br />
		<div id="contenedorm_octavos">
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
			<div id="paism">
				<img src="http://lh5.googleusercontent.com/-zXSS3VmMfQY/Ul_vXz_GiHI/AAAAAAAAAf0/H994KvZC1J4/s90/holanda.png" width="40px" height="50px"  /> <br />
				Holanda
			</div>
			<div id="paism">
				<img src="http://lh5.googleusercontent.com/-AFatj7St3m8/Ul_vYbJkEwI/AAAAAAAAAgE/dxxtEgdDsWA/s86/inglaterra.png" width="40px" height="50px"  /> <br />
				Inglaterra
			</div>
			<div id="paism">
				<img src="http://lh5.googleusercontent.com/-mHmcDpJm5gI/Ul_vYjHvg-I/AAAAAAAAAgU/Xh8HWRUvOPQ/s81/italia.png" width="40px" height="50px"  /> <br />
				Italia
			</div>
		</div>
		
		<table width="100%">
			<!-- ################# PARTIDO 1 ################# -->
			<tr>
				<td colspan="4">
					<div id="titulom"> Viernes 04 Julio 17:00 hs Fortaleza</div>
				</td>
			</tr>
			<tr>
				<td> </td>
				<td> Ganador </td>
				<td>  </td>
			</tr>	
			<tr>
				<td style="width: 45%">
					<?php
						echo $ganadorpartido1;
					?>
				</td>
				
				<td>
					<input type="radio" name="cuartospartido1" value="1a" required> 
					<input type="radio" name="cuartospartido1" value="2b"> 
					<!-- <td style="width: 5%;background: white"></td> -->
				</td>
				
				<td style="width: 45%">
					<?php
						echo $ganadorpartido2;
					?>
				</td>
			</tr> 
			
			<tr colspan="4">
				<td>
					<br />
				</td>
			</tr>
			
			<!-- ################# PARTIDO 2 ################# -->
			<tr>
				<td colspan="4">
					<div id="titulom"> Sabado 05 Julio 17:00 hs Bahía</div>
				</td>
			</tr>
			<tr>
				<td> </td>
				<td> Ganador </td>
				<td>  </td>
			</tr>	
			<tr>
				<td style="width: 45%">
					<?php
						echo $ganadorpartido3;
					?>
				</td>
				
				<td>
					<input type="radio" name="cuartospartido2" value="1a" required> 
					<input type="radio" name="cuartospartido2" value="2b"> 
					<!-- <td style="width: 5%;background: white"></td> -->
				</td>
				
				<td style="width: 45%">
					<?php
						echo $ganadorpartido4;
					?>
				</td>
			</tr> 
			
			<tr colspan="4">
				<td>
					<br />
				</td>
			</tr>
		</table>
		
		<div id="contenedorm_octavos">
			<div id="paism">
				<img src="http://lh3.googleusercontent.com/-_xG6wgeAbW8/Ul_vZTomlmI/AAAAAAAAAg4/FVjhPBs-62k/s63/suiza.png" width="40px" height="50px"  /> <br />
				Suiza
			</div>
			<div id="paism">
				<img src="http://lh6.googleusercontent.com/-9MsUAlqFSv0/UovZhPaqkbI/AAAAAAAAAjs/pTz_w5QTUZE/s76/francia.png" width="40px" height="50px"  /> <br />
				Francia
			</div>
			<div id="paism">
				<img src="http://lh3.googleusercontent.com/-arxPZXZ2L7A/Ul_vVBs7hbI/AAAAAAAAAeo/3gRnwOVIZ94/s93/argentina.png" width="40px" height="50px"  /> <br />
				Argentina
			</div>
			<div id="paism">
				<img src="http://lh6.googleusercontent.com/-3rYntFMua_c/Uoek8IYe1YI/AAAAAAAADYE/BzedaaeCXy8/s72/nigeria.png" width="40px" height="50px"  /> <br />
				Nigeria
			</div>
			<div id="paism">
				<img src="http://lh3.googleusercontent.com/-jIsJddX0U5A/Ul_vVAODsDI/AAAAAAAAAes/ACOMLDn54iY/s82/alemania.png" width="40px" height="50px"  /> <br />
				Alemania
			</div>
			<div id="paism">
				<img src="http://lh3.googleusercontent.com/-1GJ3Yuzssa8/UovWx2dkPuI/AAAAAAAAAjg/6mu8IajC7Fo/s87/portugal.png" width="40px" height="50px"  /> <br />
				Portugal
			</div>
			<div id="paism">
				<img src="http://lh6.googleusercontent.com/-8nsklMCLi5E/Ul_vZbVFZVI/AAAAAAAAAgs/VBmcOWY3AhM/s94/rusia.png" width="40px" height="50px"  /> <br />
				Rusia
			</div>						
		</div>		
	</div>

	<div id="grupocuartos">
		<span class="grupom">OCTAVOS</span>
		<br />
		<div id="contenedorm_octavos">
			<div id="paism">
				<img src="http://lh3.googleusercontent.com/-_xG6wgeAbW8/Ul_vZTomlmI/AAAAAAAAAg4/FVjhPBs-62k/s63/suiza.png" width="40px" height="50px"  /> <br />
				Suiza
			</div>
			<div id="paism">
				<img src="http://lh6.googleusercontent.com/-9MsUAlqFSv0/UovZhPaqkbI/AAAAAAAAAjs/pTz_w5QTUZE/s76/francia.png" width="40px" height="50px"  /> <br />
				Francia
			</div>
			<div id="paism">
				<img src="http://lh3.googleusercontent.com/-arxPZXZ2L7A/Ul_vVBs7hbI/AAAAAAAAAeo/3gRnwOVIZ94/s93/argentina.png" width="40px" height="50px"  /> <br />
				Argentina
			</div>
			<div id="paism">
				<img src="http://lh6.googleusercontent.com/-3rYntFMua_c/Uoek8IYe1YI/AAAAAAAADYE/BzedaaeCXy8/s72/nigeria.png" width="40px" height="50px"  /> <br />
				Nigeria
			</div>
			<div id="paism">
				<img src="http://lh3.googleusercontent.com/-jIsJddX0U5A/Ul_vVAODsDI/AAAAAAAAAes/ACOMLDn54iY/s82/alemania.png" width="40px" height="50px"  /> <br />
				Alemania
			</div>
			<div id="paism">
				<img src="http://lh3.googleusercontent.com/-1GJ3Yuzssa8/UovWx2dkPuI/AAAAAAAAAjg/6mu8IajC7Fo/s87/portugal.png" width="40px" height="50px"  /> <br />
				Portugal
			</div>
			<div id="paism">
				<img src="http://lh6.googleusercontent.com/-8nsklMCLi5E/Ul_vZbVFZVI/AAAAAAAAAgs/VBmcOWY3AhM/s94/rusia.png" width="40px" height="50px"  /> <br />
				Rusia
			</div>			
		</div>
		
		<!-- ################# GRUPO DE LA DERECHA ################# -->
		<table width="100%">
			<!-- ################# PARTIDO 3 ################# -->
			<tr>
				<td colspan="4">
					<div id="titulom"> Viernes 04 Julio 13:00 hs Río de Janeiro</div>
				</td>
			</tr>
			<tr>
				<td> </td>
				<td> Ganador </td>
				<td>  </td>
			</tr>	
			<tr>
				<td style="width: 45%">
					<?php
						echo $ganadorpartido5;
					?>
				</td>
				
				<td>
					<input type="radio" name="cuartospartido3" value="1a" required> 
					<input type="radio" name="cuartospartido3" value="2b"> 
					<!-- <td style="width: 5%;background: white"></td> -->
				</td>
				
				<td style="width: 45%">
					<?php
						echo $ganadorpartido6;
					?>
				</td>
			</tr> 
			
			<tr colspan="4">
				<td>
					<br />
				</td>
			</tr>
			
			<!-- ################# PARTIDO 4 ################# -->
			<tr>
				<td colspan="4">
					<div id="titulom"> Sabado 05 Julio 13:00 hs Brasilia</div>
				</td>
			</tr>
			<tr>
				<td> </td>
				<td> Ganador </td>
				<td>  </td>
			</tr>	
			<tr>
				<td style="width: 45%">
					<?php
						echo $ganadorpartido7;
					?>
				</td>
				
				<td>
					<input type="radio" name="cuartospartido4" value="1a" required> 
					<input type="radio" name="cuartospartido4" value="2b"> 
					<!-- <td style="width: 5%;background: white"></td> -->
				</td>
				
				<td style="width: 45%">
					<?php
						echo $ganadorpartido8;
					?>
				</td>
			</tr> 
			
			<tr colspan="4">
				<td>
					<br />
				</td>
			</tr>
		</table>
		
		<div id="contenedorm_octavos">
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
			<div id="paism">
				<img src="http://lh5.googleusercontent.com/-zXSS3VmMfQY/Ul_vXz_GiHI/AAAAAAAAAf0/H994KvZC1J4/s90/holanda.png" width="40px" height="50px"  /> <br />
				Holanda
			</div>
			<div id="paism">
				<img src="http://lh6.googleusercontent.com/-JbJ_HhOWm2w/UofWhsjssRI/AAAAAAAAAiE/g7cZtY1FYnY/s86/costademarfil.png" width="40px" height="50px"  /> <br />
				Costa de Marfil
			</div>
			<div id="paism">
				<img src="http://lh5.googleusercontent.com/-mHmcDpJm5gI/Ul_vYjHvg-I/AAAAAAAAAgU/Xh8HWRUvOPQ/s81/italia.png" width="40px" height="50px"  /> <br />
				Italia
			</div>			
		</div>		
	</div>	
	<div id="botones_cuartos">
		<input type="submit" value="Enviar">
		<input type="reset" value="Restablecer">
	</div>	
</div>
			
			
			
			
			
			
			
			
			
			
		</div>
	</div>
	</body>
</html>	