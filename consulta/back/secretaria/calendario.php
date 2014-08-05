<head>
	<script>
  $(function() {
    $( "#datepicker2" ).datepicker({
      numberOfMonths: 3,
      showButtonPanel: true
    });
  });
  </script>
  <script type="text/javascript">
	function calendar(){
		cale = document.getElementById('datepicker2').value;
		var xmlhttp;
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}	
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById('cale').innerHTML = xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET","calendar.php?c="+cale,true);
		xmlhttp.send();
	}
	
	function generar(rut,nombre,apellido,sexo,edad,direccion,telefono,consulta,diagnostico,doctor,estado,seguro){
		window.open("generarpdf.php?r="+rut+"&n="+nombre+"&a="+apellido+"&s="+sexo+"&e="+edad+"&d="+direccion+"&t="+telefono+"&c="+consulta+"&dg="+diagnostico+
					"&dc="+doctor+"&es="+estado+"&sg="+seguro);
	}
  </script>
</head>
<center>
	<h4><b>Calendario de Pacientes</h4>
	<p>Fecha: <input type="text" id="datepicker2" /></p>
	<input class="boton" type="button" value="Ver Fecha" onclick="calendar()">
</center>
<div align="left" id="cale"></div>