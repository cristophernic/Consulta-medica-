<?php
	include 'connectionAdmin.php';
	
	$rute = $_GET['r'];
	
	$query = "DELETE FROM doctor WHERE rut_doctor=".$rute;
	$result = mysqli_query($link,$query);

?>