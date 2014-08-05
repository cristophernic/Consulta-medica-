<?php
	include 'connectionAdmin.php';
	$query = "SELECT nombre_doctor FROM doctor";
	$result = mysqli_query($link,$query);
	
	$val = $_GET['d'];
	if($val=="no"){
		header ("Location: http://google.cl");
	}
?>
<script>
  $(function() {
    $( "#datepicker" ).datepicker({
      numberOfMonths: 3,
      showButtonPanel: true
    });
  });
  </script>
  <script>
	function ingresec(){
		nomb = document.getElementById('name2').value;
		apell = document.getElementById('apell2').value;
		rut = document.getElementById('rut2').value;
		dir = document.getElementById('dir2').value;
		tel = document.getElementById('tel2').value;
		cont = document.getElementById('cont2').value;
		var xmlhttp;
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}	
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById('resp2').innerHTML = xmlhttp.responseText;
				document.getElementById('name2').value = "";
				document.getElementById('apell2').value = "";
				document.getElementById('rut2').value = "";
				document.getElementById('dir2').value = "";
				document.getElementById('tel2').value = "";
				document.getElementById('cont2').value = "";
			}
		};
		xmlhttp.open("GET","ingreSec.php?n="+nomb+"&a="+apell+"&r="+rut+"&d="+dir+"&t="+tel+"&c="+cont,true);
		xmlhttp.send();
	}
  </script>
<center>
	<h4><b>Datos de la Secretaria</b></h4>
	<table>
		<tr>
			<td>Nombre: </td>
			<td><input id="name2" name="name" type="text"></td>
		</tr>
		<tr>
			<td>Apellido: </td>
			<td><input id="apell2" name="ape" type="text"></td>
		</tr>
		<tr>
			<td>RUT: </td>
			<td><input id="rut2" name="rut" type="text"></td>
		</tr>
		<tr>
			<td>Direccion: </td>
			<td><input id="dir2" name="dir" type="text"></td>
		</tr>
		<tr>
			<td>Telefono: </td>
			<td><input id="tel2" name="tel" type="text"></td>
		</tr>
		<tr>
			<td>Contraseña: </td>
			<td><input id="cont2" name="cont" type="text"></td>
		</tr>
	</table>
		<input class="boton" type="submit" value="Ingresar Secretaria" onclick="ingresec()">
	<div id="resp2"></div>
</center>