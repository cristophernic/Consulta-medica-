<?php
	include 'connectionSe.php';
	session_start();
	
	$fecha = $_GET['c'];
	
	$query = "SELECT * FROM fecha WHERE dia='".$fecha."'";
	$query2 = "SELECT doctor FROM fecha WHERE dia='".$fecha."'";
	$query3 = "SELECT hora_inicio FROM fecha WHERE dia='".$fecha."'";
	$resultx = mysqli_query($link,$query);
	$result2 = mysqli_query($link,$query2);
	$result3 = mysqli_query($link,$query3);
	$arreglo = mysqli_fetch_array($resultx);
	$arreglo2 = mysqli_fetch_array($result2);
	$arreglo3 = mysqli_fetch_array($result3);
	
	$cont = count($arreglo3);
	
	$query4 = "SELECT * FROM paciente WHERE rut_paciente='".$arreglo['rut_paciente']."'";
	$result4 = mysqli_query($link,$query4);
	$arreglo4 = mysqli_fetch_array($result4);
	
	$hora1="09:00";
	$hora2="10:00";
	$hora3="11:00";
	$hora4="12:00";
	$hora5="13:00";
	$hora6="14:00";
	$hora7="15:00";
	$hora8="16:00";
	$hora9="17:00";
	$hora10="18:00";
	$hora11="19:00";
	$hora12="20:00";
	
	echo "Dia: ".$fecha;
	//echo "<br>Doctor: ".$arreglo2[0];
	echo "<br>";
	echo "<table id='mitabla' border=1>";
	echo "<tr><th><b>Hora<th></tr>";
	echo "<tr><td>09:00 - 10:00</td><td>";
			if($hora1==$arreglo3[0]){
				echo "<b>Paciente: </b>".$arreglo4['nombre_paciente']." ".$arreglo4['apellido_paciente'];
				echo "<br><b>Doctor: </b>".$arreglo['doctor'];
				echo "<br><b>Motivo Consulta: </b>".$arreglo4['motivo_consulta'];
				echo "<br><button class='botonPDF' type='button' align='right' width='20%' 
				onclick='generar(\"".$arreglo4['rut_paciente']."\",\"".$arreglo4['nombre_paciente']."\",\"".$arreglo4['apellido_paciente']."\",\"".$arreglo4['sexo']."\",\"".$arreglo4['edad']."\",
				\"".$arreglo4['direccion']."\",\"".$arreglo4['telefono']."\",\"".$arreglo4['motivo_consulta']."\",\"".$arreglo4['diagnostico']."\",\"".$arreglo4['doctor']."\",\"".$arreglo4['estado']."\",\"".$arreglo4['seguro']."\")'>
				<img src='icono_pdf.png' width='20%'><br>Generar Reporte</button>";
			}
	echo "</td></tr>";
	echo "<tr><td>10:00 - 11:00</td><td>";
			if($hora2==$arreglo3[0]){
				echo "<b>Paciente: </b>".$arreglo4['nombre_paciente']." ".$arreglo4['apellido_paciente'];
				echo "<br><b>Doctor: </b>".$arreglo['doctor'];
				echo "<br><b>Motivo Consulta: </b>".$arreglo4['motivo_consulta'];
				echo "<br><button class='botonPDF' type='button' align='right' width='20%' 
				onclick='generar(\"".$arreglo4['rut_paciente']."\",\"".$arreglo4['nombre_paciente']."\",\"".$arreglo4['apellido_paciente']."\",\"".$arreglo4['sexo']."\",\"".$arreglo4['edad']."\",
				\"".$arreglo4['direccion']."\",\"".$arreglo4['telefono']."\",\"".$arreglo4['motivo_consulta']."\",\"".$arreglo4['diagnostico']."\",\"".$arreglo4['doctor']."\",\"".$arreglo4['estado']."\",\"".$arreglo4['seguro']."\")'>
				<img src='icono_pdf.png' width='20%'><br>Generar Reporte</button>";
			}
	echo "</td></tr>";
	echo "<tr><td>11:00 - 12:00</td><td>";
			if($hora3==$arreglo3[0]){
				echo "<b>Paciente: </b>".$arreglo4['nombre_paciente']." ".$arreglo4['apellido_paciente'];
				echo "<br><b>Doctor: </b>".$arreglo['doctor'];
				echo "<br><b>Motivo Consulta: </b>".$arreglo4['motivo_consulta'];
				echo "<br><button class='botonPDF' type='button' align='right' width='20%' 
				onclick='generar(\"".$arreglo4['rut_paciente']."\",\"".$arreglo4['nombre_paciente']."\",\"".$arreglo4['apellido_paciente']."\",\"".$arreglo4['sexo']."\",\"".$arreglo4['edad']."\",
				\"".$arreglo4['direccion']."\",\"".$arreglo4['telefono']."\",\"".$arreglo4['motivo_consulta']."\",\"".$arreglo4['diagnostico']."\",\"".$arreglo4['doctor']."\",\"".$arreglo4['estado']."\",\"".$arreglo4['seguro']."\")'>
				<img src='icono_pdf.png' width='20%'><br>Generar Reporte</button>";
			}
	echo "</td></tr>";
	echo "<tr><td>12:00 - 13:00</td><td>";
			if($hora4==$arreglo3[0]){
				echo "<b>Paciente: </b>".$arreglo4['nombre_paciente']." ".$arreglo4['apellido_paciente'];
				echo "<br><b>Doctor: </b>".$arreglo['doctor'];
				echo "<br><b>Motivo Consulta: </b>".$arreglo4['motivo_consulta'];
				echo "<br><button class='botonPDF' type='button' align='right' width='20%' 
				onclick='generar(\"".$arreglo4['rut_paciente']."\",\"".$arreglo4['nombre_paciente']."\",\"".$arreglo4['apellido_paciente']."\",\"".$arreglo4['sexo']."\",\"".$arreglo4['edad']."\",
				\"".$arreglo4['direccion']."\",\"".$arreglo4['telefono']."\",\"".$arreglo4['motivo_consulta']."\",\"".$arreglo4['diagnostico']."\",\"".$arreglo4['doctor']."\",\"".$arreglo4['estado']."\",\"".$arreglo4['seguro']."\")'>
				<img src='icono_pdf.png' width='20%'><br>Generar Reporte</button>";
			}
	echo "</td></tr>";
	echo "<tr><td>13:00 - 14:00</td><td>";
			if($hora5==$arreglo3[0]){
				echo "<b>Paciente: </b>".$arreglo4['nombre_paciente']." ".$arreglo4['apellido_paciente'];
				echo "<br><b>Doctor: </b>".$arreglo['doctor'];
				echo "<br><b>Motivo Consulta: </b>".$arreglo4['motivo_consulta'];
				echo "<br><button class='botonPDF' type='button' align='right' width='20%' 
				onclick='generar(\"".$arreglo4['rut_paciente']."\",\"".$arreglo4['nombre_paciente']."\",\"".$arreglo4['apellido_paciente']."\",\"".$arreglo4['sexo']."\",\"".$arreglo4['edad']."\",
				\"".$arreglo4['direccion']."\",\"".$arreglo4['telefono']."\",\"".$arreglo4['motivo_consulta']."\",\"".$arreglo4['diagnostico']."\",\"".$arreglo4['doctor']."\",\"".$arreglo4['estado']."\",\"".$arreglo4['seguro']."\")'>
				<img src='icono_pdf.png' width='20%'><br>Generar Reporte</button>";
			}
	echo "</td></tr>";
	echo "<tr><td>14:00 - 15:00</td><td>";
			if($hora6==$arreglo3[0]){
				echo "<b>Paciente: </b>".$arreglo4['nombre_paciente']." ".$arreglo4['apellido_paciente'];
				echo "<br><b>Doctor: </b>".$arreglo['doctor'];
				echo "<br><b>Motivo Consulta: </b>".$arreglo4['motivo_consulta'];
				echo "<br><button class='botonPDF' type='button' align='right' width='20%' 
				onclick='generar(\"".$arreglo4['rut_paciente']."\",\"".$arreglo4['nombre_paciente']."\",\"".$arreglo4['apellido_paciente']."\",\"".$arreglo4['sexo']."\",\"".$arreglo4['edad']."\",
				\"".$arreglo4['direccion']."\",\"".$arreglo4['telefono']."\",\"".$arreglo4['motivo_consulta']."\",\"".$arreglo4['diagnostico']."\",\"".$arreglo4['doctor']."\",\"".$arreglo4['estado']."\",\"".$arreglo4['seguro']."\")'>
				<img src='icono_pdf.png' width='20%'><br>Generar Reporte</button>";
			}
	echo "</td></tr>";
	echo "<tr><td>15:00 - 16:00</td><td>";
			if($hora7==$arreglo3[0]){
				echo "<b>Paciente: </b>".$arreglo4['nombre_paciente']." ".$arreglo4['apellido_paciente'];
				echo "<br><b>Doctor: </b>".$arreglo['doctor'];
				echo "<br><b>Motivo Consulta: </b>".$arreglo4['motivo_consulta'];
				echo "<br><button class='botonPDF' type='button' align='right' width='20%' 
				onclick='generar(\"".$arreglo4['rut_paciente']."\",\"".$arreglo4['nombre_paciente']."\",\"".$arreglo4['apellido_paciente']."\",\"".$arreglo4['sexo']."\",\"".$arreglo4['edad']."\",
				\"".$arreglo4['direccion']."\",\"".$arreglo4['telefono']."\",\"".$arreglo4['motivo_consulta']."\",\"".$arreglo4['diagnostico']."\",\"".$arreglo4['doctor']."\",\"".$arreglo4['estado']."\",\"".$arreglo4['seguro']."\")'>
				<img src='icono_pdf.png' width='20%'><br>Generar Reporte</button>";
			}
	echo "</td></tr>";
	echo "<tr><td>16:00 - 17:00</td><td>";
			if($hora8==$arreglo3[0]){
				echo "<b>Paciente: </b>".$arreglo4['nombre_paciente']." ".$arreglo4['apellido_paciente'];
				echo "<br><b>Doctor: </b>".$arreglo['doctor'];
				echo "<br><b>Motivo Consulta: </b>".$arreglo4['motivo_consulta'];
				echo "<br><button class='botonPDF' type='button' align='right' width='20%' 
				onclick='generar(\"".$arreglo4['rut_paciente']."\",\"".$arreglo4['nombre_paciente']."\",\"".$arreglo4['apellido_paciente']."\",\"".$arreglo4['sexo']."\",\"".$arreglo4['edad']."\",
				\"".$arreglo4['direccion']."\",\"".$arreglo4['telefono']."\",\"".$arreglo4['motivo_consulta']."\",\"".$arreglo4['diagnostico']."\",\"".$arreglo4['doctor']."\",\"".$arreglo4['estado']."\",\"".$arreglo4['seguro']."\")'>
				<img src='icono_pdf.png' width='20%'><br>Generar Reporte</button>";
			}
	echo "</td></tr>";
	echo "<tr><td>17:00 - 18:00</td><td>";
			if($hora9==$arreglo3[0]){
				echo "<b>Paciente: </b>".$arreglo4['nombre_paciente']." ".$arreglo4['apellido_paciente'];
				echo "<br><b>Doctor: </b>".$arreglo['doctor'];
				echo "<br><b>Motivo Consulta: </b>".$arreglo4['motivo_consulta'];
				echo "<br><button class='botonPDF' type='button' align='right' width='20%' 
				onclick='generar(\"".$arreglo4['rut_paciente']."\",\"".$arreglo4['nombre_paciente']."\",\"".$arreglo4['apellido_paciente']."\",\"".$arreglo4['sexo']."\",\"".$arreglo4['edad']."\",
				\"".$arreglo4['direccion']."\",\"".$arreglo4['telefono']."\",\"".$arreglo4['motivo_consulta']."\",\"".$arreglo4['diagnostico']."\",\"".$arreglo4['doctor']."\",\"".$arreglo4['estado']."\",\"".$arreglo4['seguro']."\")'>
				<img src='icono_pdf.png' width='20%'><br>Generar Reporte</button>";
			}
	echo "</td></tr>";
	echo "<tr><td>18:00 - 19:00</td><td>";
			if($hora10==$arreglo3[0]){
				echo "<b>Paciente: </b>".$arreglo4['nombre_paciente']." ".$arreglo4['apellido_paciente'];
				echo "<br><b>Doctor: </b>".$arreglo['doctor'];
				echo "<br><b>Motivo Consulta: </b>".$arreglo4['motivo_consulta'];
				echo "<br><button class='botonPDF' type='button' align='right' width='20%' 
				onclick='generar(\"".$arreglo4['rut_paciente']."\",\"".$arreglo4['nombre_paciente']."\",\"".$arreglo4['apellido_paciente']."\",\"".$arreglo4['sexo']."\",\"".$arreglo4['edad']."\",
				\"".$arreglo4['direccion']."\",\"".$arreglo4['telefono']."\",\"".$arreglo4['motivo_consulta']."\",\"".$arreglo4['diagnostico']."\",\"".$arreglo4['doctor']."\",\"".$arreglo4['estado']."\",\"".$arreglo4['seguro']."\")'>
				<img src='icono_pdf.png' width='20%'><br>Generar Reporte</button>";
			}
	echo "</td></tr>";
	echo "<tr><td>19:00 - 20:00</td><td>";
			if($hora11==$arreglo3[0]){
				echo "<b>Paciente: </b>".$arreglo4['nombre_paciente']." ".$arreglo4['apellido_paciente'];
				echo "<br><b>Doctor: </b>".$arreglo['doctor'];
				echo "<br><b>Motivo Consulta: </b>".$arreglo4['motivo_consulta'];
				echo "<br><button class='botonPDF' type='button' align='right' width='20%' 
				onclick='generar(\"".$arreglo4['rut_paciente']."\",\"".$arreglo4['nombre_paciente']."\",\"".$arreglo4['apellido_paciente']."\",\"".$arreglo4['sexo']."\",\"".$arreglo4['edad']."\",
				\"".$arreglo4['direccion']."\",\"".$arreglo4['telefono']."\",\"".$arreglo4['motivo_consulta']."\",\"".$arreglo4['diagnostico']."\",\"".$arreglo4['doctor']."\",\"".$arreglo4['estado']."\",\"".$arreglo4['seguro']."\")'>
				<img src='icono_pdf.png' width='20%'><br>Generar Reporte</button>";
			}
	echo "</td></tr>";
	echo "<tr><td>20:00 - 21:00</td><td>";
			if($hora12==$arreglo3[0]){
				echo "<b>Paciente: </b>".$arreglo4['nombre_paciente']." ".$arreglo4['apellido_paciente'];
				echo "<br><b>Doctor: </b>".$arreglo['doctor'];
				echo "<br><b>Motivo Consulta: </b>".$arreglo4['motivo_consulta'];
				echo "<br><button class='botonPDF' type='button' align='right' width='20%' 
				onclick='generar(\"".$arreglo4['rut_paciente']."\",\"".$arreglo4['nombre_paciente']."\",\"".$arreglo4['apellido_paciente']."\",\"".$arreglo4['sexo']."\",\"".$arreglo4['edad']."\",
				\"".$arreglo4['direccion']."\",\"".$arreglo4['telefono']."\",\"".$arreglo4['motivo_consulta']."\",\"".$arreglo4['diagnostico']."\",\"".$arreglo4['doctor']."\",\"".$arreglo4['estado']."\",\"".$arreglo4['seguro']."\")'>
				<img src='icono_pdf.png' width='20%'><br>Generar Reporte</button>";
			}
	echo "</td></tr>";
	echo "</table>";
?>