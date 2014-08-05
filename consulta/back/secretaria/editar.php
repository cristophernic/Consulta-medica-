<?php
	include 'connectionSe.php';
	
	$rut = $_GET['r'];
	$tel = $_GET['t'];
	
	$query1 = "SELECT direccion,telefono FROM paciente WHERE rut_paciente=".$rut;
	$result1 = mysqli_query($link,$query1);
	$arreglo = mysqli_fetch_array($result1);
	

	$query = "UPDATE paciente SET telefono='".$tel."' WHERE rut_paciente=".$rut;
	$result = mysqli_query($link,$query);
	//$query = "UPDATE paciente SET direccion='".$dir."',telefono='".$tel."' WHERE rut_paciente=".$rut;
	//$result = mysqli_query($link,$query);
	
	echo $tel;
?>