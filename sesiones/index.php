<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sesiones con php</title>
	<style>
	body{
	background-color:aqua;
	
	}
	
	
	
		form{
			margin:10em auto;
			width:300px;
			text-align:center;
			background-color:black;
			color:white;
		
		
		}
		span{
			color:#F00;
			text-shadow: 1px 1px 1px white;
		
		
		}
	
	
	</style>
</head>
<body>
<form name="aut_frmf" action="control.php" method="post" enctype="application/x-www-form-urlencoded ">
	<fieldset>
		<?php
		if($_GET["error"]=="si"){
		echo "<span>Checame tus datos</span>";
		}
		else{
		echo "<span>Bienvenido</span>";
		}
		
		
		?>
		<legend>Login</legend>
		<label>Usuario</label><input type="text"  name="user_txt"/><br><br />
		<label>Login</label><input type="password"  name="pass_txt"/><br><br />
		<input type="submit" name="entrar_btn" />
		
	
	</fieldset>
</form>
	<!--- inicio codigo www.gratisparaweb.com --->
<div align="center">
<a href="http://contadores.gratisparaweb.com" target="_blank">
<img src="http://www.gratisparaweb.com/contadores/imagen.php?contador=15&id2=90" alt="Contadores" border="0">
</a>

<img src="http://contadorgratis.web-kit.org/img210898-d027c10b1e4e4d0e8579b68fd8c72d.gif" border="0" >