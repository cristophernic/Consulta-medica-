<?php
	include 'connectionDc.php';
	
	$query = "SELECT rut_paciente FROM paciente";
	$result = mysqli_query($link,$query);
	$arreglo_php = array();
	if(mysqli_num_rows($result)==0)
		array_push($arreglo_php, "No hay datos");
	else{
		while($palabras = mysqli_fetch_array($result)){
			array_push($arreglo_php, $palabras['rut_paciente']);
		}
	}

?>
<head>
	<style>
	#project-label {
		display: block;
		font-weight: bold;
		margin-bottom: 1em;
	}
	#project-icon {
		float: left;
		height: 32px;
		width: 32px;
	}
	#project-description {
		margin: 0;
		padding: 0;
	}
	</style>
	<script>
		function busqueda(){
			var b = document.getElementById('buscar').value;
			var xmlhttp;
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}	
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById('busc').innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","busqueda.php?b="+b,true);
			xmlhttp.send();
		}
	</script>
  <script>
  $(function(){
    var autocompletar = new Array();
    <?php 
     for($p = 0;$p < count($arreglo_php); $p++){ ?>
       autocompletar.push('<?php echo $arreglo_php[$p]; ?>');
     <?php } ?>
     $("#buscar").autocomplete({ 
       source: autocompletar 
     });
  });
</script>
</head>
<center>
	<h4><b>Busqueda de Pacientes</h4>
		RUT: </b><input id="buscar" name="busca"/>
		<input type="hidden" id="project-id" />
		<p id="project-description"></p>
		<br><input class="boton" type="submit" value="Buscar" onclick="busqueda()">
	<div id="busc">
	</div>
</center>