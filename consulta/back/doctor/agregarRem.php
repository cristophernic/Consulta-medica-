<?php
	session_start();
	
	include 'connectionDc.php';
	
	$query = "SELECT * FROM remedios";
	$result = mysqli_query($link,$query);
?>
<head>
<script>
	function eliminar(idrem){
		var rem = idrem;
		var xmlhttp;
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}	
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					//document.getElementById('atndr').innerHTML = xmlhttp.responseText;
					window.location.reload();
				}
			};
			xmlhttp.open("GET","eliminarRem.php?r="+rem,true);
			xmlhttp.send();
	}
	
	function agregaRem(){
		var xmlhttp;
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}	
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById('formrem').innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","agregarRem2.php",true);
			xmlhttp.send();
	}
	
	function formRem(){
		var nom = document.getElementById('nomrem').value;
		var emp = document.getElementById('emprem').value;
		var act = document.getElementById('act').value;
		var enf = document.getElementById('enfrem').value;
		var xmlhttp;
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}	
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					//document.getElementById('atndr').innerHTML = xmlhttp.responseText;
					window.location.reload();
				}
			};
			xmlhttp.open("GET","agregarRem3.php?n="+nom+"&em="+emp+"&a="+act+"&en="+enf,true);
			xmlhttp.send();
	}
</script>
</head>
<center>
	<h4>Lista de Remedios<h4>
	<div id='formrem'>
	</div>
	<div align='left'>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input class="boton" type="button" value="+Agregar Remedio" onclick="agregaRem()">
	</div>
	<table id="mitabla">
		<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Empresa</th>
			<th>Componente Activo</th>
			<th>Enfermedad a tratar</th>
			<th>Doctor</th>
			<th>Eliminar</th>
		</tr>
		</thead>
	<?php
			while($row = mysqli_fetch_array($result)){
			if($row['doctor']==$_SESSION['name'] || $row['doctor']==$_SESSION['name']." ".$_SESSION['apell']){
			echo "<tr>
					<td>".$row['id_remedio']."</td>
					<td>".$row['nombre']."</td>
					<td>".$row['empresa']."</td>
					<td>".$row['activo']."</td>
					<td>".$row['enfermedad']."</td>
					<td>".$row['doctor']."</td>
					<td><input class='boton' type='button' value='Eliminar' onclick='eliminar(\"".$row['id_remedio']."\")'</td>
				</tr>";
			}
			}
		?>
	</table>
</center>