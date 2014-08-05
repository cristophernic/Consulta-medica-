<?php session_start();
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
		<link rel="stylesheet" href="administ.css" />
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
	<center>
		<div id="tabs">
			<ul>
			<li><a href="ingresarDoc.php">Ingresar Doctor</a></li>
			<li><a href="ingresarSec.php">Ingresar Secretaria</a></li>
			<li><a href="borrarDoc.php">Borrar Doctor</a></li>
			<li><a href="borrarSec.php">Borrar Secretaria</a></li>
			</ul>
		</div>
	</center>
</body>
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