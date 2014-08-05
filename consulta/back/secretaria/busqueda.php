<?php
	include 'connectionSe.php';
	
	$buscar = $_GET['b'];
	$query="SELECT * FROM paciente WHERE rut_paciente=".$buscar;
	$result=mysqli_query ($link, $query);
	$row = mysqli_fetch_array ($result);
	
	echo "<table id='mitabla'>
			<tr>
			<thead>
				<th><b>Nombre Completo</b></th>
				<th><b>Sexo</b></th>
				<th><b>Edad</b></th>
				<th><b>Aseguradora de Salud</b></th>
				<th><b>Dirección</b></th>
				<th><b>Telefono</b></th>
				<th><b>Doctor</b></th>
				<th><b>Estado</b></th>
			</thead>
			</tr>";
	echo "<tr>
				<td>".$row['nombre_paciente']." ".$row['apellido_paciente']."</td>
				<td>".$row['sexo']."</td>
				<td>".$row['edad']."</td>
				<td>".$row['seguro']."</td>
				<td>".$row['direccion']."</td>
				<td>".$row['telefono']."</td>
				<td>".$row['doctor']."</td>
				<td>".$row['estado']."</td>
		  </tr>";
?>