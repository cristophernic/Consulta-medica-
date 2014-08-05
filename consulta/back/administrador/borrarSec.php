<?php
	include 'connectionAdmin.php';
	
	$query = "SELECT * FROM secretaria";
	$result = mysqli_query($link,$query);
?>
<head>
	<script>
		function deletesec(rut){
		var xmlhttp;
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}	
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById('dc').innerHTML = " ";
			}
		};
		xmlhttp.open("GET","deleteSec.php?r="+rut,true);
		xmlhttp.send();
		}
		
		function reposec(){
			window.open("repoSec.php");
		}
	</script>
</head>
<center>
	Vista de Secretarias<br>
	<table id="mitabla">
		<tr>
		<thead>
			<th><b>RUT</th>
			<th><b>Nombre</th>
			<th><b>Apellido</th>
			<th><b>Direccion</th>
			<th><b>Telefono</th>
		</thead>
		</tr>
		<?php
			while($row2 = mysqli_fetch_array($result)){
			echo "<tr>
					<td>".$row2['rut_secretaria']."</td>
					<td>".$row2['nombre']."</td>
					<td>".$row2['apellido']."</td>
					<td>".$row2['direccion']."</td>
					<td>".$row2['telefono']."</td>
					<td><input class='boton' type='button' onclick='deletesec(\"".$row2['rut_secretaria']."\")' value='Eliminar'></td>
					</tr>";
			}
		?>
	</table>
	<button class="botonPDF" onclick="reposec()"><img src="icono_pdf.png" width="50px"><br>Reporte de secretarias</button>
</center>