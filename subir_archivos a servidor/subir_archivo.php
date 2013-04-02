<!DOCTYPE html>
<html>
	<head>
		<title>Subimos archivos</title>
		<meta charset="utf-8"/>
		<style type="text/css">
		body{
			background-color:black;
			color:white;
		
		
		}
		
		form {
			position:absolute;
			//border:2px solid gray;
			left: 200px;
			
			top: 200px;
		
		}
		
		
		
		</style>
	
	
	</head>
	<body>
		<header>
			<hgroup>
				<h1>Sube tu archivo con el formulario de abajo</h1>
			</hgroup>
		</header>
		<form name="fa" action="recibe_archivo.php" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>Subir archivos:</legend>
				<input type="file" name="selec_fl" id="fil"/>
				<input type="submit" name="envia_btn"/>
			</fieldset>
			
		
		</form>
		
	
	
	</body>


</html>