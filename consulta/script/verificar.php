<?php
	$rut = $_GET['e'];
	
	if($rut=="true"){
		echo "<img src='img/valid.png' weight='25px'>";
	}else{
		echo "<img src='img/error.png' weight='25px'>";
	}
?>