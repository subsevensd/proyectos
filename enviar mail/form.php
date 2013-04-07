<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Envio de mail</title>
	
	<style type="text/css">
	@font-face{
	font-family:'dr';
	url:src('dr.ttf') format('truetype');
	
	
	}
	
	body{
	background-color:rgba(0,0,255,0.3);
	
	}
	form{
		width:300px;
		margin:100px auto;
		
		background-color:rgba(0,0,255,0.5);
		text-align:center;
	
	}
	span{
		background-color:red;
		font-family: ‘dr'; 
		 
	
	}
	
	</style>
	<script type="text/javascript">
		function validar(){
			var validar = true;
			var expRegEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/; //nos permite validar email
			var de_mail = document.getElementById('remi_txt');
			var pa_mail = document.getElementById('desti_txt');
			var asun_mail = document.getElementById('asu_txt');
			var men_mail = document.getElementById('men_txt-a');
			var formu = document.getElementById('formu');
			if(!de_mail.value){
				alert("El campo de es requerido");
				de_mail.focus();
				validar = false;
				
				
			
			}else if(!expRegEmail.exec(de_mail.value)){
			
				alert("El campo de no es valido");
				de_mail.focus();
				validar = false;
			}
			 else if(!pa_mail.value){
				alert("El para  es requerido");
				pa_mail.focus();
				validar = false;
				
				
			
			}else if(!expRegEmail.exec(pa_mail.value)){
			
				alert("El campo para no es valido");
				pa_mail.focus();
				validar = false;
			}
			else if(!asun_mail.value){
				alert("El asunto es requerido");
				asun_mail.focus();
				validar = false;
				
				
			
			}
			else if(!men_mail.value){
				alert("El mensaje es requerido");
				men_mail.focus();
				validar = false;
				
				
			
			}
			if(validar){
			formu.submit();
			}
			
			
		
		
		}
		
		window.onload = function(){
		boton= document.getElementById('env_btn');
			boton.onclick = validar;
		}
	
	</script>
</head>
<body>
	<form action="enviar-mail.php" method="post" name="form" id="formu" enctype="application/x-www-form-urlencoded">
		<fieldset>
			<legend>Formulario de contacto</legend>
			<label for="remi_txt">De: </label><input type="text" name="remi_txt" id="remi_txt" placeholder="Tu correo..."/>
			<br><br />
			<label for="desti_txt">Para: </label><input type="text" name="desti_txt" id="desti_txt" placeholder="Destinatario..."/>
			<br><br />
			<label for="asu_txt">Asunto: </label><input type="text" name="asu_txt" id="asu_txt" placeholder="Tu asunto..."/>
			<br><br />
			<label for="men_txt-a">Mensaje: </label><br /><textarea name="men_txt-a" id="men_txt-a" cols="30" rows="10" placeholder="Tu mensaje..."></textarea>
			<br><br />
			<input type="button" id="env_btn" name="env_btn" value="Enviar"/>
			<br>
			<?php
				if($_GET['error'] == "si"){
					echo "<span>Hay problemas con tus datos</span>";
				
				}else{
					echo "<span>Bienvenido </span>";
				
				
				}
			
			?>
			
		</fieldset>
	</form>
	
</body>
</html>