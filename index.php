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
					
					<table width="100%">
						<!-- ################# PARTIDO 1 ################# -->
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
								<input type="radio" name="octavospartido1" value="1a" required> 
								<input type="radio" name="octavospartido1" value="2b"> 
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
						
						<!-- ################# PARTIDO 2 ################# -->
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
									<OPTION VALUE="Colombia">Colombia</OPTION>
									<OPTION VALUE="Grecia">Grecia </OPTION>
									<OPTION VALUE="Costa de Marfil">Costa de Marfil</OPTION>
									<OPTION VALUE="Japon">Japon </OPTION> 
								</SELECT>
							</td>
							
							<td>
								<input type="radio" name="octavospartido2" value="1a" required> 
								<input type="radio" name="octavospartido2" value="2b"> 
								<!-- <td style="width: 5%;background: white"></td> -->
							</td>
							
							<td style="width: 45%">
								<SELECT NAME="2grupod" SIZE=1 >
									<OPTION VALUE="Uruguay">Uruguay</OPTION>
									<OPTION VALUE="Costa Rica">Costa Rica </OPTION>
									<OPTION VALUE="Inglaterra">Inglaterra</OPTION>
									<OPTION VALUE="Italia ">Italia  </OPTION> 
								</SELECT>
							</td>
						</tr> 
						
						<tr colspan="4">
							<td>
								<br />
							</td>
						</tr>
						
						<!-- ################# PARTIDO 3 ################# -->
						<tr>
							<td colspan="4">
								<div id="titulom"> Lunes 30 Junio 13:00 hs Brasilia</div>
							</td>
						</tr>
						<tr>
							<td> 1ºGrupo E </td>
							<td> Ganador </td>
							<td> 2ºGrupo F </td>								
						</tr>
						<tr>
							<td style="width: 45%">
								<SELECT NAME="1grupoe" SIZE=1 required>
									<OPTION VALUE="Suiza">Suiza</OPTION>
									<OPTION VALUE="Ecuador">Ecuador </OPTION>
									<OPTION VALUE="Francia">Francia</OPTION>
									<OPTION VALUE="Honduras ">Honduras  </OPTION> 
								</SELECT>
							</td>
							
							<td>
								<input type="radio" name="octavospartido3" value="1a" required> 
								<input type="radio" name="octavospartido3" value="2b"> 
								<!-- <td style="width: 5%;background: white"></td> -->
							</td>
							
							<td style="width: 45%">
								<SELECT NAME="2grupof" SIZE=1 >
									<OPTION VALUE="Argentina">Argentina</OPTION>
									<OPTION VALUE="Bosnia">Bosnia </OPTION>
									<OPTION VALUE="Iran">Iran</OPTION>
									<OPTION VALUE="Nigeria">Nigeria </OPTION> 
								</SELECT>
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
								<div id="titulom"> Lunes 30 Junio 17:00 hs Porto Alegre</div>
							</td>
						</tr>
						<tr>
							<td> 1ºGrupo G </td>
							<td> Ganador </td>
							<td> 2ºGrupo H </td>								
						</tr>
						<tr>
							<td style="width: 45%">
								<SELECT NAME="1grupog" SIZE=1 required>
									<OPTION VALUE="Alemania">Alemania</OPTION>
									<OPTION VALUE="Portugal ">Portugal  </OPTION>
									<OPTION VALUE="Ghana">Ghana</OPTION>
									<OPTION VALUE="USA">USA </OPTION> 
								</SELECT>
							</td>
							
							<td>
								<input type="radio" name="octavospartido4" value="1a" required> 
								<input type="radio" name="octavospartido4" value="2b"> 
								<!-- <td style="width: 5%;background: white"></td> -->
							</td>
							
							<td style="width: 45%">
								<SELECT NAME="2grupoh" SIZE=1 >
									<OPTION VALUE="Belgica">Belgica</OPTION>
									<OPTION VALUE="Bosnia">Argelia  </OPTION>
									<OPTION VALUE="Rusia">Rusia</OPTION>
									<OPTION VALUE="Corea del Sur">Corea del Sur </OPTION> 
								</SELECT>
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

				<div id="grupooctavos">
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
					
					<!-- ################# GRUPO DE LA IZQUIERDA ################# -->
					<table width="100%">
						<!-- ################# PARTIDO 5 ################# -->
						<tr>
							<td colspan="4">
								<div id="titulom"> Domingo 29 Junio 13:00 hs Fortaleza</div>
							</td>
						</tr>
						<tr>
							<td> 1ºGrupo B </td>
							<td> Ganador </td>
							<td> 2ºGrupo A </td>								
						</tr>
						<tr>
							<td style="width: 45%">
								<SELECT NAME="1grupob" SIZE=1 required>
									<OPTION VALUE="España">España</OPTION>
									<OPTION VALUE="Holanda">Holanda </OPTION>
									<OPTION VALUE="Chile">Chile</OPTION>
									<OPTION VALUE="Australia">Australia </OPTION>
								</SELECT>
							</td>
							
							<td>
								<input type="radio" name="octavospartido5" value="1a" required> 
								<input type="radio" name="octavospartido5" value="2b"> 
								<!-- <td style="width: 5%;background: white"></td> -->
							</td>
							
							<td style="width: 45%">
								<SELECT NAME="2grupoa" SIZE=1 >
									<OPTION VALUE="Brasil">Brasil</OPTION>
									<OPTION VALUE="México">México</OPTION>
									<OPTION VALUE="Croacia">Croacia</OPTION>
									<OPTION VALUE="Camerún">Camerún</OPTION> 
								</SELECT>
							</td>
						</tr> 
						
						<tr colspan="4">
							<td>
								<br />
							</td>
						</tr>
						
						<!-- ################# PARTIDO 6 ################# -->
						<tr>
							<td colspan="4">
								<div id="titulom"> Domingo 29 Junio 17:00 hs Recife</div>
							</td>
						</tr>
						<tr>
							<td> 1ºGrupo D </td>
							<td> Ganador </td>
							<td> 2ºGrupo C </td>								
						</tr>
						<tr>
							<td style="width: 45%">
								<SELECT NAME="1grupod" SIZE=1 required>
									<OPTION VALUE="Uruguay">Uruguay</OPTION>
									<OPTION VALUE="Costa Rica">Costa Rica </OPTION>
									<OPTION VALUE="Inglaterra">Inglaterra</OPTION>
									<OPTION VALUE="Italia ">Italia  </OPTION>
								</SELECT>
							</td>
							
							<td>
								<input type="radio" name="octavospartido6" value="1a" required> 
								<input type="radio" name="octavospartido6" value="2b"> 
								<!-- <td style="width: 5%;background: white"></td> -->
							</td>
							
							<td style="width: 45%">
								<SELECT NAME="2grupoc" SIZE=1 >
									<OPTION VALUE="Colombia">Colombia</OPTION>
									<OPTION VALUE="Grecia">Grecia </OPTION>
									<OPTION VALUE="Costa de Marfil">Costa de Marfil</OPTION>
									<OPTION VALUE="Japon">Japon </OPTION>
								</SELECT>
							</td>
						</tr> 
						
						<tr colspan="4">
							<td>
								<br />
							</td>
						</tr>
						
						<!-- ################# PARTIDO 7 ################# -->
						<tr>
							<td colspan="4">
								<div id="titulom"> Martes 01 Julio 13:00 hs Sao Paulo</div>
							</td>
						</tr>
						<tr>
							<td> 1ºGrupo F </td>
							<td> Ganador </td>
							<td> 2ºGrupo E </td>								
						</tr>
						<tr>
							<td style="width: 45%">
								<SELECT NAME="1grupof" SIZE=1 required>
									<OPTION VALUE="Argentina">Argentina</OPTION>
									<OPTION VALUE="Bosnia">Bosnia </OPTION>
									<OPTION VALUE="Iran">Iran</OPTION>
									<OPTION VALUE="Nigeria">Nigeria </OPTION> 
								</SELECT>
							</td>
							
							<td>
								<input type="radio" name="octavospartido7" value="1a" required> 
								<input type="radio" name="octavospartido7" value="2b"> 
								<!-- <td style="width: 5%;background: white"></td> -->
							</td>
							
							<td style="width: 45%">
								<SELECT NAME="2grupoe" SIZE=1 >
									<OPTION VALUE="Suiza">Suiza</OPTION>
									<OPTION VALUE="Ecuador">Ecuador </OPTION>
									<OPTION VALUE="Francia">Francia</OPTION>
									<OPTION VALUE="Honduras ">Honduras  </OPTION> 
								</SELECT>
							</td>
						</tr> 
						
						<tr colspan="4">
							<td>
								<br />
							</td>
						</tr>
						
						<!-- ################# PARTIDO 8 ################# -->
						<tr>
							<td colspan="4">
								<div id="titulom"> Martes 01 Julio 17:00 hs Bahía</div>
							</td>
						</tr>
						<tr>
							<td> 1ºGrupo H </td>
							<td> Ganador </td>
							<td> 2ºGrupo G </td>								
						</tr>
						<tr>
							<td style="width: 45%">
								<SELECT NAME="1grupoh" SIZE=1 required>
									<OPTION VALUE="Belgica">Belgica</OPTION>
									<OPTION VALUE="Bosnia">Argelia  </OPTION>
									<OPTION VALUE="Rusia">Rusia</OPTION>
									<OPTION VALUE="Corea del Sur">Corea del Sur </OPTION>
								</SELECT>
							</td>
							
							<td>
								<input type="radio" name="octavospartido8" value="1a" required> 
								<input type="radio" name="octavospartido8" value="2b"> 
								<!-- <td style="width: 5%;background: white"></td> -->
							</td>
							
							<td style="width: 45%">
								<SELECT NAME="2grupog" SIZE=1 >
									<OPTION VALUE="Alemania">Alemania</OPTION>
									<OPTION VALUE="Portugal ">Portugal  </OPTION>
									<OPTION VALUE="Ghana">Ghana</OPTION>
									<OPTION VALUE="USA">USA </OPTION> 
								</SELECT>
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
				<div id="botones">
					<input type="submit" value="Enviar">
					<input type="reset" value="Restablecer">
				</div>	
			</div>
		
			
		</form>	
		<!-- ACA TERMINO EL FORMULARIO-->
		
		<!-- -->
		<?php 
		if (isset($_POST['octavospartido1'])){
			if($_POST['octavospartido1'] == '1a')
				echo "gano ".$_POST['1grupoa'];
			else
				echo"gano ".$_POST['2grupob'];
		}
		if (isset($_POST['octavospartido2'])){
			if($_POST['octavospartido2'] == '1a')
				echo "gano ".$_POST['1grupoc'];
			else
				echo"gano ".$_POST['2grupod'];
		}
		if (isset($_POST['octavospartido3'])){
			if($_POST['octavospartido3'] == '1a')
				echo "gano ".$_POST['1grupoe'];
			else
				echo"gano ".$_POST['2grupof'];
		}
		
		?>
		
		
	</div>
	</body>
</html>