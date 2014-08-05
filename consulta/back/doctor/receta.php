<?php
	include 'connectionDc.php';
	
	session_start();
	
	$rut = $_GET['r'];
	$f = 1;
	
	$query = "SELECT * FROM receta WHERE rut_paciente='".$rut."'";
	$queryx = "SELECT * FROM remedios WHERE doctor='".$_SESSION['name']."'";
	$result = mysqli_query($link,$query);
	$resultx = mysqli_query($link,$queryx);
	$rowx = mysqli_fetch_array($result);
	
	echo "<table>";
	if($rowx==false){
	echo	"<tr>
				<td>
					<b>Remedio: </b>
				</td>
				<td>
					<select id='rem'>
					<option id='rem' value='null'>--Remedios--</option>";
					while($rowx2 = mysqli_fetch_array($resultx)){
						echo "<option id='rem' value='".$rowx2['id_remedio']."'>".$rowx2['nombre']." Comp:".$rowx2['activo']."</option>";
					}
	echo			"</select>
				</td>
				<td></td>
				<td><b>Dias: </b></td>
				<td><input type='text' id='diarec'></td>
				<td></td>
				<td><b>Cantidad</b></td>
				<td><input type='text' id='cant'></td>
			</tr>";
	}else{
		while($row = mysqli_fetch_array($result)){
			$query2 = "SELECT * FROM remedios WHERE id_remedio=".$row['id_remedio'];
			$result2 = mysqli_query($link,$query2);
			while($row2 = mysqli_fetch_array($result2)){
				echo	"<tr>
					<td><b>Remedio: </b></td>
					<td><input type='text' id='rem' value='\"".$row2['nombre']."\"'></td>
					<td></td>
					<td><b>Dias: </b></td>
					<td><input type='text' id='diarec'></td>
				</tr>";
			}
		}
	}
	echo	"</table>
			<input type='button' class='boton' value='Agregar Receta' onclick='remedio(\"".$rut."\")'>";
?>
<div id='receta2'></div>