<?php
	include 'connectionDc.php';
	
	session_start();
	
	$rut = $_GET['r'];
	
	$query = "SELECT * FROM paciente WHERE rut_paciente=".$rut;
	$result = mysqli_query($link,$query);
	$row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
	
	echo "<table>";
	echo "<tr><td><b>RUT: </b></td><td>".$row['rut_paciente']."</td></tr>";
	echo "<tr><td><b>Nombre: </b></td><td>".$row['nombre_paciente']."</td></tr>";
	echo "<tr><td><b>Apellido: </b></td><td>".$row['apellido_paciente']."</td></tr>";
	echo "<tr><td><b>Sexo: </b></td><td>".$row['sexo']."</td></tr>";
	echo "<tr><td><b>Edad: </b></td><td>".$row['edad']."</td></tr>";
	echo "<tr><td><b>Direccion: </b></td><td>".$row['direccion']."</td></tr>";
	echo "<tr><td><b>Telefono: </b></td><td>".$row['telefono']."</td></tr>";
	echo "<tr><td><b>Motivo de la consulta: </b></td><td>".$row['motivo_consulta']."</td></tr>";
	echo "<tr><td><b>Diagnostico: </b></td><td><textarea id='diag'>".$row['diagnostico']."</textarea></td>
		<td><button class='botonREM' onclick='receta(\"".$rut."\")'><img src='remedio.png' width='15px'><br><b>+Agregar Receta</b></button></td>
		</tr>";
	echo "</table>";
	echo "<div id='receta'></div>";
	echo "<input type='button' class='boton' value='Guardar Consulta' onclick='agregar(\"".$rut."\")'>";
?>