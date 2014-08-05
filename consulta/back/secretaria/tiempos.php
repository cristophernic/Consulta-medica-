<?php
	include 'connectionSe.php';
	
	$rut = $_GET['r'];
	$fecha = $_GET['f'];
	$horai = $_GET['hi'];
	$horat = $_GET['ht'];
	$doctor = $_GET['d'];
	
	$query = "INSERT INTO fecha(rut_paciente,dia,hora_inicio,hora_termino,doctor) VALUES('".$rut."','".$fecha."','".$horai."','".$horat."','".$doctor."')";
	$result = mysqli_query($link,$query);
	
	if($result==true){
		echo "<img src='valid.png'>";
		echo "<br><font color='green'>Nueva hora ingresada con exito</font>";
	}else{
		echo "<img src='error.png'>";
		echo "<br><font color='red'>Error al ingresar nueva hora</font>";
	}
?>