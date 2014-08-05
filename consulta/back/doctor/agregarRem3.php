<?php
	session_start();
	
	include 'connectionDc.php';
	
	$nom = $_GET['n'];
	$emp = $_GET['em'];
	$act = $_GET['a'];
	$enf = $_GET['en'];
	$doc = $_SESSION['name']." ".$_SESSION['apell'];
	
	$query = "INSERT INTO remedios(nombre,empresa,activo,enfermedad,doctor) VALUES('".$nom."','".$emp."','".$act."','".$enf."','".$doc."')";
	$result = mysqli_query($link,$query);
?>