<?php
	include 'connectionDc.php';
	
	session_start();
	
	$rut = $_GET['r'];
	$reme = $_GET['re'];
	$dia = $_GET['d'];
	$cant = $_GET['c'];
	
	if($reme==null || $dia==null || $cant==null){
		echo "<font color='red'>Error al ingresar receta, faltan datos</font>";
	}else{
		$query = "INSERT INTO receta (rut_paciente,id_remedio,dias,cantidad) VALUES('".$rut."','".$reme."','".$dia."','".$cant."')";
		$result = mysqli_query($link, $query);
		
		if($result==true){
		echo "<font color='green'>Receta ingresada con exito</font>";
	}else{
		echo "<font color='red'>Error al ingresar receta</font>";
	}
	}	
	
?>