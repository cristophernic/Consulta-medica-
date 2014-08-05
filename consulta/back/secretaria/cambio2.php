<?php
include 'connectionSe.php';
	$camb = $_GET['d'];

	$query = "UPDATE paciente SET estado='ok' WHERE rut_paciente=".$camb;
	$result = mysqli_query($link,$query);
	
	echo "<img src='valid.png' onclick='cambiar(\"".$camb."\")'>"
?>