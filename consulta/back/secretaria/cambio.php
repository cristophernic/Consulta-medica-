<?php
	include 'connectionSe.php';
	$camb = $_GET['d'];

	$query = "UPDATE paciente SET estado='off' WHERE rut_paciente=".$camb;
	$result = mysqli_query($link,$query);

	echo "<img src='error.png' onclick='cambiar2(\"".$camb."\")'>"
?>