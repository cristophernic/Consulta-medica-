<?php
	include 'connectionDc.php';
	
	$rut = $_GET['r'];
	$diag = $_GET['d'];
	
	$query = "UPDATE paciente SET diagnostico='".$diag."' WHERE rut_paciente=".$rut;
	$result = mysqli_query($link,$query);

?>