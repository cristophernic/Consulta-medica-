<?php
	session_start();
	
	include 'connectionDc.php';
	
?>
<center>
	<table>
		<tr>
			<td>Nombre: </td>
			<td><input type='text' id='nomrem'></td>
		</tr>
		<tr>
			<td>Empresa: </td>
			<td><input type='text' id='emprem'></td>
		</tr>
		<tr>
			<td>Componente activo: </td>
			<td><input type='text' id='act'></td>
		</tr>
		<tr>
			<td>Enfermedad a tratar: </td>
			<td><input type='text' id='enfrem'></td>
		</tr>
		<tr>
			<td>Doctor: </td>
			<?php 
				echo "<td>".$_SESSION['name']." ".$_SESSION['apell']."</td>"; 
			?>
		</tr>
	</table>
	<input class="boton" type="button" value="Ingresar nuevo remedio" onclick="formRem()">
</center>