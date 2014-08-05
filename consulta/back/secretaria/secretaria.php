<?php session_start();
	include 'connectionSe.php';
	if($_SESSION['id']!=null){
?>
<head>
	<img src="head.png">
		<meta http-equiv="last-modified" content="0">
		<meta charset="utf-8" />
		<script type="text/javascript" src="jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
		<script type="text/javascript" src="jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
		<link rel="stylesheet" href="jquery-ui-1.10.3.custom/css/start/jquery-ui-1.10.3.custom.css" />
		<link rel="stylesheet" href="jquery-ui-1.10.3.custom/css/start/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="secretar.css" />
	<script>
	$(function() {
    $( "#tabs" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.error(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
	});
	</script>
	<script>
		$(function() {
		$('#activator').click(function(){
			$('#overlay').fadeIn('fast',function(){
				$('#box').animate({'top':'160px'},500);
			});
		});
		$('#boxclose').click(function(){
			$('#box').animate({'top':'-200px'},500,function(){
				$('#overlay').fadeOut('fast');
			});
		});
 
		});
	</script>
	<script>
		function salir(){
			if(confirm("¿Esta seguro de querer salir de la aplicación?")){
				var xmlhttp;
				if (window.XMLHttpRequest){
					xmlhttp=new XMLHttpRequest();
				}else{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}	
				xmlhttp.onreadystatechange=function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200){
					}
				};
				xmlhttp.open("GET","salir.php",true);
				xmlhttp.send();
				window.location.href = 'http://localhost/consulta/';
			}
		}
	</script>
</head>
<body>
	<div id="user" align="right">
		<img src="bombilla.gif" id="activator" width="30px"> <b>Hola Secretaria:</b>
		<?php
			echo $_SESSION['name']." ".$_SESSION['apell'];
		?>
	</div>
	<center>
		<div id="tabs">
			<ul>
			<li><a href="ingresarPa.php">Ingresar Pacientes</a></li>
			<li><a href="editarPa.php">Editar Estado del Pacientes</a></li>
			<li><a href="buscar.php">Buscar Paciente</a></li>
			<li><a href="calendario.php">Calendario</a></li>
			</ul>
		</div>
	</center>
</body>

<div class="overlay" id="overlay" style="display:none;"></div>
<div class="box" id="box">
 <a class="boxclose" id="boxclose"></a>
 <h1>Aviso importante del día</h1>
 <p>
 <?php
	$hoy = date("m/d/Y");
	$query = "SELECT * FROM fecha WHERE dia='".$hoy."'";
	$result = mysqli_query($link,$query);
	while($row=mysqli_fetch_array($result)){
		$query2="SELECT * FROM paciente WHERE rut_paciente=".$row['rut_paciente'];
		$result2=mysqli_query($link,$query2);
		$row2=mysqli_fetch_array($result2);
		
		echo "<table>";
		echo "<tr>
					<td><b>RUT</td>
					<td><b>Nombre Completo</td>
					<td><b>Telefono</td>
					<td><b>Hora</td>
					<td><b>Doctor</td>
			  </tr>";
		echo "<tr>
				<td>".$row['rut_paciente']."</td>
				<td>".$row2['nombre_paciente']." ".$row2['apellido_paciente']."</td>
				<td>".$row2['telefono']."</td>
				<td>".$row['hora_inicio']."</td>
				<td>".$row['doctor']."</td>
			  </tr>";
		echo "</table>";
	}
 ?>
 </p>
</div>

<div class="footer-wrapper">
<div id="footer">
            <ul id="footer-menu">
                <a onclick="salir()"><font face="arial" color="white"><u>Home</u></font></a>
            </ul>

            <div class="footer-copyright"><font face="arial" color="white">Copyright &copy; 2013 Centro Médico Dental Hnos. Fuster. Todos los derechos reservados.</font></div>
</div>
</div>
<?php }else{
	header('Location: error.php');
	}

?>