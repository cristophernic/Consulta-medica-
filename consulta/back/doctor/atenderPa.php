<?php
	include 'connectionDc.php';
	
	session_start();
	
	$queryx = "SELECT rut_paciente,nombre_paciente,apellido_paciente,sexo,edad,direccion,telefono,motivo_consulta,diagnostico,doctor,estado,seguro FROM paciente";
	$resultx = mysqli_query($link,$queryx);
?>
<head>
	<script>
		function responder(rute){
			var rut = rute; 
			var xmlhttp;
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}	
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById('atndr').innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","atender.php?r="+rute,true);
			xmlhttp.send();
		}
		
		function agregar(rutpa){
			var rut = rutpa;
			var diag = document.getElementById('diag').value;
			var xmlhttp;
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}	
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					location.reload();
				}
			};
			xmlhttp.open("GET","atender2.php?r="+rut+"&d="+diag,true);
			xmlhttp.send();
		}
		
		function receta(rut){
			var rute = rut;
			var xmlhttp;
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}	
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById('receta').innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","receta.php?r="+rute,true);
			xmlhttp.send();
		}
		
		function remedio(ru){
			var rute = ru;
			var reme = document.getElementById('rem').value;
			var dia = document.getElementById('diarec').value;
			var cant = document.getElementById('cant').value;
			var xmlhttp;
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}	
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById('receta2').innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","receta2.php?r="+rute+"&re="+reme+"&d="+dia+"&c="+cant,true);
			xmlhttp.send();
		}
	</script>
</head>
<center>
		<h4><b>Vista de Pacientes</b></h4>
	<div id="atndr"></div>
	
	<br>
	<table id="mitabla">
		<thead>
		<tr>
			<th><b>RUT</b></th>
			<th><b>Nombre</b></th>
			<th><b>Apellido</b></th>
			<th><b>Sexo</b></th>
			<th><b>Edad</b></th>
			<th><b>Seguro</b></th>
			<th><b>Direccion</b></th>
			<th><b>Telefono</b></th>
			<th><b>Doctor</b></th>
			<th><b>Motivo de Consulta</b></th>
			<th><b>Diagnostico</b></th>
			<th><b>Estado</b></th>
		</tr>
		</thead>
		<?php
			while($row2 = mysqli_fetch_array($resultx)){
			if($row2['doctor']==$_SESSION['name']){
			echo "<tr>
					<td>".$row2['rut_paciente']."</td>
					<td>".$row2['nombre_paciente']."</td>
					<td>".$row2['apellido_paciente']."</td>
					<td>".$row2['sexo']."</td>
					<td>".$row2['edad']."</td>
					<td>".$row2['seguro']."</td>
					<td>".$row2['direccion']."</td>
					<td>".$row2['telefono']."</td>
					<td>".$row2['doctor']."</td>
					<td>".$row2['motivo_consulta']."</td>
					<td>".$row2['diagnostico']."</td>
					<td>";
					if($row2['estado']=="ok"){
						echo '<img src="valid.png">';
					}else{
						echo '<img src="error.png">';
					}
			echo	'</td>
					<td><input class="boton" type=button value="atender" onclick="responder(\''.$row2['rut_paciente'].'\')"></td>
					</tr>';
			}
			}
		?>
	</table>
</center>