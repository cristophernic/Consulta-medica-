<?php
	include 'connection.php';
	
	header('Content-Type: text/html; charset=UTF-8');
	
	session_start();
	
	$rute=$_POST['rut'];
	$id = explode("-",$rute);
	$rut = $id[0];
	
	$pass=$_POST['pass'];
	
	$_SESSION['id']=$rut;
	
	$dbname="consulta";
	$tablename="doctor";
	$query="SELECT rut_doctor,pass FROM doctor WHERE rut_doctor=".$rut." AND pass='".$pass."'";
	$query2="SELECT rut_secretaria,pass FROM secretaria WHERE rut_secretaria=".$rut." AND pass='".$pass."'";
	$query3="SELECT rut_admin,pass_admin FROM administrador WHERE rut_admin=".$rut." AND pass_admin='".$pass."'";
	$query4="SELECT * FROM secretaria WHERE rut_secretaria=".$rut." AND pass='".$pass."'";
	$query5="SELECT * FROM doctor WHERE rut_doctor=".$rut." AND pass='".$pass."'";
	$result=mysqli_query ($link, $query);
	$result2=mysqli_query ($link, $query2);
	$result3=mysqli_query ($link, $query3);
	$result4=mysqli_query ($link, $query4);
	$result5=mysqli_query ($link, $query5);
	$row = mysqli_fetch_array ($result, MYSQLI_NUM);
	$row2 = mysqli_fetch_array ($result2, MYSQLI_NUM);
	$row3 = mysqli_fetch_array ($result3, MYSQLI_NUM);
	$row4 = mysqli_fetch_array ($result4, MYSQLI_ASSOC);
	$row5 = mysqli_fetch_array ($result5, MYSQLI_ASSOC);
	
	
	
	if($row[0]!=false && $row[1]!=false){
		$_SESSION['name'] = $row5['nombre_doctor'];
		$_SESSION['apell'] = $row5['apellido_doctor'];
		header('Location: doctor/doctor.php');
	}else{
		if($row2[0]!=false && $row2[1]!=false){
			$_SESSION['name'] = $row4['nombre'];
			$_SESSION['apell'] = $row4['apellido'];
			header('Location: secretaria/secretaria.php');
		}else{
			if($row3[0]!=false && $row3[1]!=false){
				header('Location: administrador/administrador.php');
			}else{
				echo "RUT y/o contraseña incorrecto";
			}
		}
	}

	mysqli_free_result($result);
	mysqli_free_result($result2);
?>