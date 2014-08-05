function verificar(){
		var dire = document.getElementById('login').value;
		var rute = dire.split("-");
		var objeto = rute[0];
		var digit = rute[1];
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
 
		if (dvokstr==dv && digit!=null){
			document.formi.btn.disabled=false;
			var result = true;
			var xmlhttp;
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}	
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById('imagen').innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","script/verificar.php?e="+result,true);
			xmlhttp.send();
		}else{
			var result = false;
			var xmlhttp;
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}	
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById('imagen').innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","script/verificar.php?e="+result,true);
			xmlhttp.send();
		}
}