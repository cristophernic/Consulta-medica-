<?php
	include 'connectionSe.php';
	
	$queryx = "SELECT rut_paciente,nombre_paciente,apellido_paciente,sexo,edad,direccion,telefono,doctor,estado,seguro FROM paciente";
	$resultx = mysqli_query($link,$queryx);
	
	function getRut($rut){
		$rut = strrev($rut);
		$aux = 1;
		for($i=0;$i<strlen($rut);$i++){
			$aux++;
			$s += intval($rut[$i])*$aux;
			if($aux == 7){ $aux=1; }
		}
		$digit = 11-$s%11;
		if($digit == 11){$d = 0;}elseif($digit == 10){$d = "K";}else{$d = $digit;}
		return $d;
	}

?>
<head>
	<script>
		function cambiar(rut){
			var estado = rut;
			var xmlhttp;
			if(confirm("¿Seguro que quiere cambiar el estado del paciente?")){
				if (window.XMLHttpRequest){
					xmlhttp=new XMLHttpRequest();
				}else{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}	
				xmlhttp.onreadystatechange=function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200){
						document.getElementById('cambio').innerHTML = xmlhttp.responseText;
					}
				};
				xmlhttp.open("GET","cambio.php?d="+estado,true);
				xmlhttp.send();
			}
		}
		
		function cambiar2(rut){
			var estado = rut;
			var xmlhttp;
			if(confirm("¿Seguro que quiere cambiar el estado del paciente?")){
				if (window.XMLHttpRequest){
					xmlhttp=new XMLHttpRequest();
				}else{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}	
				xmlhttp.onreadystatechange=function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200){
						document.getElementById('cambio').innerHTML = xmlhttp.responseText;
					}
				};
				xmlhttp.open("GET","cambio2.php?d="+estado,true);
				xmlhttp.send();
			}
		}
		
		function editar(rut,dire){
			var ruut = rut;
			var dire = dire;
			alert(ruut);
			alert(dire);
			alert(tele);
			var xmlhttp;
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}	
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					var respuesta = xmlhttp.responseText;
					alert(respuesta);
				}
			};
			//xmlhttp.open("GET","editar.php?r="+ruut+"&d="+dire+"&t="+tele,true);
			xmlhttp.send();
		}
	</script>
</head>
<center>
	<h4><b>Editor y vista de Pacientes</b></h4>
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
			<th><b>Estado</b></th>
		</tr>
		</thead>
		<?php
			while($row2 = mysqli_fetch_array($resultx)){
			$digit = getRut($row2['rut_paciente']);
			$rut = $row2['rut_paciente']."-".$digit;
			echo "
				<tbody>
				<tr>
					<td>".$rut."</td>
					<td>".$row2['nombre_paciente']."</td>
					<td>".$row2['apellido_paciente']."</td>
					<td>".$row2['sexo']."</td>
					<td>".$row2['edad']."</td>
					<td>".$row2['seguro']."</td>
					<td>".$row2['direccion']."</td>
					<td>".$row2['telefono']."</td>
					<td>".$row2['doctor']."</td>
					<td>
					<div id='cambio'>";
					if($row2['estado']=="ok"){
						echo '<img src="valid.png" onclick="cambiar(\''.$row2['rut_paciente'].'\')">';
					}else{
						echo '<img src="error.png" onclick="cambiar2(\''.$row2['rut_paciente'].'\')">';
					}
			echo	'</div></td>
					</tr>
					</tbody>';
			}
		?>
	</table>
</center>