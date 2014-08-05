<?php
	session_start();
	
	session_destroy();
	
	echo "window.location.href = 'http://localhost/consulta/'";
?>