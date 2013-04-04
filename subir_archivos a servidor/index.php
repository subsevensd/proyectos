<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sesiones con php</title>
</head>
<body>
<form name="aut_frmf" action="control.php" method="post" enctype="application/x-www-form-urlencoded ">
	<fieldset>
		<?php
		if($_GET["error"]=="si"){
		echo "<span>Checame tus datos</span>";
		else{
		echo "Bienvenido";
		}
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