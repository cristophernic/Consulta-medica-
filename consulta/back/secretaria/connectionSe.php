<?php
	$host="localhost";
	$user="root";
	$password="root";

	$link = mysqli_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
	mysqli_select_db($link,"consulta") or die ("no database");
	
?>