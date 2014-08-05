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
	function ingredoc(){
		nomb = document.getElementById('name').value;
		apell = document.getElementById('apell').value;
		rut = document.getElementById('rut').value;
		dir = document.getElementById('dir').value;
		tel = document.getElementById('tel').value;
		cont = document.getElementById('cont').value;
		var xmlhttp;
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}	
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById('resp').innerHTML = xmlhttp.responseText;
				document.getElementById('name').value = "";
				document.getElementById('apell').value = "";
				document.getElementById('rut').value = "";
				document.getElementById('dir').value = "";
				document.getElementById('tel').value = "";
				document.getElementById('cont').value = "";
			}
		};
		xmlhttp.open("GET","ingreDoc.php?n="+nomb+"&a="+apell+"&r="+rut+"&d="+dir+"&t="+tel+"&c="+cont,true);
		xmlhttp.send();
	}
  </script>
<center>
	<h4><b>Datos del Doctor</b></h4>
	<table>
		<tr>
			<td>Nombre: </td>
			<td><input id="name" name="name" type="text"></td>
		</tr>
		<tr>
			<td>Apellido: </td>
			<td><input id="apell" name="ape" type="text"></td>
		</tr>
		<tr>
			<td>RUT: </td>
			<td><input id="rut" name="rut" type="text"></td>
		</tr>
		<tr>
			<td>Direccion: </td>
			<td><input id="dir" name="dir" type="text"></td>
		</tr>
		<tr>
			<td>Telefono: </td>
			<td><input id="tel" name="tel" type="text"></td>
		</tr>
		<tr>
			<td>Contraseña: </td>
			<td><input id="cont" name="cont" type="text"></td>
		</tr>
	</table>
		<input class="boton" type="submit" value="Ingresar Doctor" onclick="ingredoc()">
	<div id="resp"></div>
</center>