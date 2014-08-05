<?php
	include 'connectionSe.php';
	
	$rut = $_GET['r'];
	$dir = $_GET['d'];
	
	$query1 = "SELECT direccion,telefono FROM paciente WHERE rut_paciente=".$rut;
	$result1 = mysqli_query($link,$query1);
	$arreglo = mysqli_fetch_array($result1);
	

	$query = "UPDATE paciente SET direccion='".$dir."' WHERE rut_paciente=".$rut;
	$result = mysqli_query($link,$query);
	//$query = "UPDATE paciente SET direccion='".$dir."',telefono='".$tel."' WHERE rut_paciente=".$rut;
	//$result = mysqli_query($link,$query);
	
	echo $dir;
?>