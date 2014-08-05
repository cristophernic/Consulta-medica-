<?php
	include 'connectionDc.php';
	
	$rem = $_GET['r'];
	
	$query = "DELETE FROM remedios WHERE id_remedio='".$rem."'";
	$result = mysqli_query($link,$query);
?>