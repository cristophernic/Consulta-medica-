<?php
	include 'connectionSe.php';
	
	session_start();
	
	$nombre = $_GET['name'];
	$apellido = $_GET['ape'];
	$rutpac = $_GET['rut'];
	$sexo = $_GET['sex'];
	$edad = $_GET['edad'];
	$direccion = $_GET['dir'];
	$telefono = $_GET['tel'];
	$consulta = $_GET['consulta'];
	$doctor = $_GET['doctor'];
	$fecha = $_GET['fecha'];
	$horai = $_GET['horaI'];
	$horat = $_GET['horaT'];
	$seguro = $_GET['seguro'];
	
	$query = "INSERT INTO paciente(rut_paciente,nombre_paciente,apellido_paciente,sexo,edad,direccion,telefono,motivo_consulta,diagnostico,doctor,estado,seguro) 
			VALUES('".$rutpac."','".$nombre."','".$apellido."','".$sexo."','".$edad."','".$direccion."','".$telefono."','".$consulta."','null','".$doctor."','ok','".$seguro."')";	
	$query2 = "INSERT INTO fecha(rut_paciente,dia,hora_inicio,hora_termino,doctor) VALUES('".$rutpac."','".$fecha."','".$horai."','".$horat."','".$doctor."')";
	$result2 = mysqli_query($link,$query);
	$result3 = mysqli_query($link,$query2);
	
	if($result2==true){
		echo "<img src='valid.png'>";
		echo "<br><font color='green'>Paciente ingresado correctamente</font>";
	}else{
		echo "<img src='error.png'>";
		echo "<br><font color='red'>Error al ingresar paciente</font>";
	}
	
?>