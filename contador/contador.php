<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Contador de visitas</title>
</head>
<body>
	<?php
		$ar = "contador.txt"; //asi se llamara el archivo a crear
		if(!file_exists($ar)){
			$arc = fopen($ar,"w"); // creamos archivo con permisos de escritura
			$es = fwrite($arc,0); //escribiendole 0 al handler
			fclose($arc);
		}
		$arc = fopen($ar,"r"); // abrimos con permisos de lectura
		$cont = fread($arc,filesize($ar)); // estamos leyendo el manejador $arc y salvandolo en $cont
		fclose($arc); // cerramos
		$cont += 1;
		$arc = fopen($ar,"w"); // cuando abrimos con w se pierde lo anterior esto no nos importa por que ya tenemos $cont
		$es = fwrite($arc,$cont);
		fclose($arc);
		
	
	
	?>
	<?php include("contador.txt")?>
	
</body>
</html>