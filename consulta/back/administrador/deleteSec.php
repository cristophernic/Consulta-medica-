<?php
	include 'connectionAdmin.php';
	
	$rute = $_GET['r'];
	
	$query = "DELETE FROM secretaria WHERE rut_secretaria=".$rute;
	$result = mysqli_query($link,$query);

?>