<?php
	include 'connectionSe.php';
	
	$rut = $_GET['rut'];
	
	$query2 = "SELECT * FROM paciente WHERE rut_paciente=".$rut;
	$result2 = mysqli_query($link,$query2);
	
	$row2=mysqli_fetch_array($result2);
	
	echo"<input type='button' value='Volver' onclick='javascript:location.reload()'>";
	echo "<table>
		<tr>
			<td></td>
			<td>Nombre: </td>
			<td>".$row2['nombre_paciente']."</td>
		</tr>
		<tr>
			<td></td>
			<td>Apellido: </td>
			<td>".$row2['apellido_paciente']."</td>
		</tr>
		<tr>
			<td></td>
			<td>RUT: </td>
			<td>".$row2['rut_paciente']."</td>
		</tr>
		<tr>
			<td></td>
			<td>Sexo: </td>
			<td>".$row2['sexo']."</td> 
		</tr>
		<tr>
			<td></td>
			<td>Edad: </td>
			<td>".$row2['edad']."</td>
		</tr>
		<tr>
			<td></td>
			<td>Aseguradora de Salud: </td>
			<td>".$row2['seguro']."</td>
		</tr>
		<tr>
			<td><span class='ui-icon ui-icon-disk' onclick='ver2()'></span></td>
			<td>Direccion: </td>
			<td><div id='iddire'>".$row2['direccion']."</div></td>
			<td><input type='text' style='visibility:hidden' id='oculto2'></td>
			<td><img src='disquete2.png' style='visibility:hidden' id='imagoculta2' onclick='editar2(\"".$row2['rut_paciente']."\")'></td>
		</tr>
		<tr>
			<td><span class='ui-icon ui-icon-disk' onclick='ver()'></span></td>
			<td>Telefono: </td>
			<td><div id='edtelef'>".$row2['telefono']."</div></td>
			<td><input type='text' style='visibility:hidden' id='oculto'></td>
			<td><img src='disquete2.png' style='visibility:hidden' id='imagoculta' onclick='editar(\"".$row2['rut_paciente']."\")'></td>
		</tr>
		<tr>
			<td></td>
			<td>Doctor: </td>
			<td>".$row2['doctor']."</td>
		</tr>
		<tr>
			<td></td>
			<td>Fecha: </td>
			<td><p><input name='fecha' type='text' id='datepicker' placeholder='mm/dd/yyyy'/></p></td>
		</tr>
		<tr>
			<td></td>
			<td>Hora Inicio: </td>
			<td><input type='text' id='horai' name='horaI' placeholder='Ej: 13:00'></td>
		</tr>
		<tr>
			<td></td>
			<td>Hora Termino: </td>
			<td><input type='text' id='horat' name='horaT' placeholder='Ej: 14:00' ></td>
		</tr>
		<tr>
			<td></td>
			<td>Motivo de la consulta: </td>
			<td>".$row2['motivo_consulta']."</td>
		</tr>
	</table>
	<input type='button' onclick='tiempos(\"".$row2['rut_paciente']."\",\"".$row2['doctor']."\")' value='Ingresar fecha y hora nueva'>";

?>