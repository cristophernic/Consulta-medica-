<?php
	include 'connectionAdmin.php';
	
	$query = "SELECT * FROM doctor";
	$result = mysqli_query($link,$query);
?>
<head>
	<script>
		function deletedoc(rut){
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
		xmlhttp.open("GET","deleteDoc.php?r="+rut,true);
		xmlhttp.send();
		}
		
		function repodoc(){
			window.open("repoDoc.php");
		}
	</script>
</head>
<center>
	Vista de Doctores<br>
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
					<td>".$row2['rut_doctor']."</td>
					<td>".$row2['nombre_doctor']."</td>
					<td>".$row2['apellido_doctor']."</td>
					<td>".$row2['direccion']."</td>
					<td>".$row2['telefono']."</td>
					<td><input class='boton' type='button' onclick='deletedoc(\"".$row2['rut_doctor']."\")' value='Eliminar'></td>
					</tr>";
			}
		?>
	</table>
	<button class="botonPDF" onclick="repodoc()"><img src="icono_pdf.png" width="50px"><br>Reporte de doctores</button>
</center>