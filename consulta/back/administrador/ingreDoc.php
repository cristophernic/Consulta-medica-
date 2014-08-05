<?php
	include 'connectionAdmin.php';
	
	session_start();
	
	$nombre = $_GET['n'];
	$apellido = $_GET['a'];
	$rut = $_GET['r'];
	$direccion = $_GET['d'];
	$telefono = $_GET['t'];
 	$password = $_GET['c'];
	
	$query = "INSERT INTO doctor(rut_doctor,nombre_doctor,apellido_doctor,direccion,telefono,pass) 
			  VALUES('".$rut."','".$nombre."','".$apellido."','".$direccion."','".$telefono."','".$password."')";
			  
	$result = mysqli_query($link,$query);
	
	if($result==true){
		echo "<img scr='valid.png'>";
	}else{
		echo "<img src='error.png'>";
	}
?>