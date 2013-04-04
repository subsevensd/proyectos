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
	
</body>
</html>