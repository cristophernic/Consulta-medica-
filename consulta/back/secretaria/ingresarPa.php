<?php
	include 'connectionSe.php';
	$query = "SELECT * FROM doctor";
	$query2 = "SELECT * FROM paciente";
	$result = mysqli_query($link,$query);
	$result2 = mysqli_query($link,$query2);
	
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
	function ingresaPac(){
		nomb = document.getElementById('name').value;
		apell = document.getElementById('apell').value;
		rut = document.getElementById('rut').value;
		if(document.getElementById('sexm').checked) {
			sexo = document.getElementById('sexm').value;
		}else if(document.getElementById('sexf').checked) {
			sexo = document.getElementById('sexf').value;
		}
		edad = document.getElementById('edad').value;
		seguro = document.getElementById('seguro').value;
		dir = document.getElementById('dir').value;
		tel = document.getElementById('tel').value;
		doc = document.getElementById('doctor').value;
		fecha = document.getElementById('datepicker').value;
		horai = document.getElementById('horai').value;
		horat = document.getElementById('horat').value;
		cons = document.getElementById('consult').value;
		var xmlhttp;
		if(validaRut()==true){
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}	
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById('aviso').innerHTML = xmlhttp.responseText;
					document.getElementById('name').value = "";
					document.getElementById('apell').value = "";
					document.getElementById('rut').value = "";
					document.getElementById('edad').value = "";
					document.getElementById('seguro').value = "";
					document.getElementById('dir').value = "";
					document.getElementById('tel').value = "";
					document.getElementById('doctor').value = "";
					document.getElementById('datepicker').value = "";
					document.getElementById('horai').value = "";
					document.getElementById('horat').value = "";
					document.getElementById('consult').value = "";
				}
			};
			xmlhttp.open("GET","datosPa.php?name="+nomb+"&ape="+apell+"&rut="+rut+"&sex="+sexo+"&edad="+edad+"&dir="+dir+"&tel="+tel+"&consulta="+cons+"&doctor="+doc+
						"&fecha="+fecha+"&horaI="+horai+"&horaT="+horat+"&seguro="+seguro,true);
			xmlhttp.send();
		}else{
			alert("Rut invalido");
		}
	}
	
	function chose(){
		var cho = document.getElementById('ciente').value;
		//alert(cho);
		var xmlhttp;
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}	
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById('aqui').innerHTML = xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET","elegir.php?rut="+cho,true);
		xmlhttp.send();
	}
	
	function tiempos(rut,doc){
		fecha = document.getElementById('datepicker').value;
		horai = document.getElementById('horai').value;
		horat = document.getElementById('horat').value;
		var cho = document.getElementById('ciente').value;
		//alert(cho);
		var xmlhttp;
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}	
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById('aviso').innerHTML = xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET","tiempos.php?r="+rut+"&f="+fecha+"&hi="+horai+"&ht="+horat+"&d="+doc,true);
		xmlhttp.send();
	}
	
	function ver(){
			if (document.getElementById("oculto")){
				document.getElementById("oculto").style.visibility = 'visible';
				document.getElementById("imagoculta").style.visibility = 'visible';
			}
	}
	
	function ver2(){
		if(document.getElementById("oculto2")){
			document.getElementById("oculto2").style.visibility = 'visible';
			document.getElementById("imagoculta2").style.visibility = 'visible';
		}
	}
	
	function editar(rut){
		var dato = document.getElementById('oculto').value;
		var rute = rut;
		var xmlhttp;
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}	
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById('edtelef').innerHTML = xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET","editar.php?r="+rute+"&t="+dato,true);
		xmlhttp.send();
	}
	
	function editar2(rut){
		var dato = document.getElementById('oculto2').value;
		var rute = rut;
		var xmlhttp;
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}	
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById('iddire').innerHTML = xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET","editar2.php?r="+rute+"&d="+dato,true);
		xmlhttp.send();
	}
	
	function validaRut(){
		var objeto = document.getElementById('rut').value;
		var digit = document.getElementById('digit').value;
		var rut = objeto+"-"+digit;
		if (rut.length<9)
			return(false)
		i1=rut.indexOf("-");
		dv=rut.substr(i1+1);
		dv=dv.toUpperCase();
		nu=rut.substr(0,i1);
 
		cnt=0;
		suma=0;
		for (i=nu.length-1; i>=0; i--)
		{
			dig=nu.substr(i,1);
			fc=cnt+2;
			suma += parseInt(dig)*fc;
			cnt=(cnt+1) % 6;
		}
		dvok=11-(suma%11);
		if (dvok==11) dvokstr="0";
		if (dvok==10) dvokstr="K";
		if ((dvok!=11) && (dvok!=10)) dvokstr=""+dvok;
 
		if (dvokstr==dv)
			return(true);
		else
			return(false);
		
	}
  </script>
  <div align="left">
	Los campos con (*) son obligatorios.
  </div>
<center>
	<h4><b>Datos del Paciente</b>
	<?php
	
					echo "<select id='ciente' name='ciente' onchange='chose()'>
							<option id='ciente' name='ciente' value='null' >Agregar Paciente antiguo</option>";
							while($row2=mysqli_fetch_array($result2)){
								echo "<option id='ciente' name='ciente' value='".$row2['rut_paciente']."' >".$row2['nombre_paciente']." ".$row2['apellido_paciente']."</option>";
							}
					echo "</select>";
					
	?></h4>
	<div id="aqui">
	<table>
		<tr>
			<td>Nombre: </td>
			<td><input id="name" name="name" type="text"> *</td>
		</tr>
		<tr>
			<td>Apellido: </td>
			<td><input id="apell" name="ape" type="text"> *</td>
		</tr>
		<tr>
			<td>RUT: </td>
			<td><input id="rut" name="rut" type="text">-<input type='text' id='digit' size='1' maxlength='1'> *</td>
		</tr>
		<tr>
			<td>Sexo: </td>
			<td><input type="radio" id="sexm" name="sex" value="m">M
			<input type="radio" id="sexf" name="sex" value="f">F    *</td> 
		</tr>
		<tr>
			<td>Edad: </td>
			<td><input id="edad" name="edad" type="text"></td>
		</tr>
		<tr>
			<td>Seguro Médico: </td>
			<td><select id="seguro" name="seguro">
				<option id="seguro" name="seguro" value="null">------</option>
				<option id="seguro" name="seguro">Isapre</option>
				<option id="seguro" name="seguro">Fonasa</option>
			</select> *</td>
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
			<td>Doctor: </td>
			<td><?php
					
					echo "<select id='doctor' name='doctor'>
							<option id='doctor' name='doctor' value='null'>-------------</option>";
							while($row=mysqli_fetch_array($result)){
							echo "<option id='doctor' name='doctor' value='".$row['nombre_doctor']."'>".$row['nombre_doctor']." ".$row['apellido_doctor']."</option>";
							}
							echo "</select>";
				?>
			*</td>
		</tr>
		<tr>
			<td>Fecha: </td>
			<td><p><input name="fecha" type="text" id="datepicker" placeholder="mm/dd/yyyy"/></p></td>
		</tr>
		<tr>
			<td>Hora Inicio: </td>
			<td><input type="text" id="horai" name="horaI" placeholder="Ej: 13:00"></td>
		</tr>
		<tr>
			<td>Hora Termino: </td>
			<td><input type="text" id="horat" name="horaT" placeholder="Ej: 14:00" ></td>
		</tr>
		<tr>
			<td>Motivo de la consulta: </td>
			<td><textarea id="consult" name="consulta"></textarea> *</td>
		</tr>
	</table>
		<input class="boton" type="button" value="Ingresar Paciente" onclick="ingresaPac()">
	</div>
	<div id="aviso">
	</div>
</center>