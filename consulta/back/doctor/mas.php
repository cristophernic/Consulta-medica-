<?php
	include 'connectionDc.php';
	
	session_start();
	
	echo	"<tr>
				<td>
					<input type='button' value='+' onclick='mas(\"".$f."\")'>
					<input type='button' value='-'>
					<b>Remedio: </b>
				</td>
				<td>
					<select id='rem'>
					<option id='rem' value='null'>--Remedios--</option>";
					while($rowx2 = mysqli_fetch_array($resultx)){
						echo "<option id='rem'>".$rowx2['nombre']." Comp:".$rowx2['activo']."</option>";
					}
	echo			"</select>
				</td>
				<td></td>
				<td><b>Dias: </b></td>
				<td><input type='text' id='diarec'></td>
			</tr>";

?>