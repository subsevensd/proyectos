<!DOCTYPE html>
<html>
	<head>
		<title>Recibimos</title>
		<meta charset="utf-8"/>
		<style type="text/css">
		body{
			background-color:black;
			color:white;
		
		
		}
		#art1{
			background-color:blue;
		
		
		}
		#art2{
			background-color:red;
		
		
		}
		
		
		
		
		
		</style>
	
	
	</head>
	<body>
		<header>
			<hgroup>
				<h1>Consulta la subida</h1>
			</hgroup>
		</header>
		<section> 
				<article id="art1">
					<?php
						foreach($_FILES["selec_fl"] as $x=>$v){
						echo $x.": ".$v."<br>";
							}

					?>
				</article>
				<article id="art2">
					<?php
						function byt_kb($tam){
						$tamkb = $tam/1024;
						return $tamkb;
						
						
						}
						$archivo = $_FILES["selec_fl"]["tmp_name"];
						$tam_by= $_FILES["selec_fl"]["size"];
						$tam_kb= byt_kb($tam_by);
						
						
						$destino = "archivos/".$_FILES["selec_fl"]["name"];
						if($tam_kb <= 900){
							move_uploaded_file($archivo,$destino);
							echo "Se ha subido correctamente";
						
						}else{
							echo "Perdon solo aceptamos archivos menores de 700kb <br>";
							echo "<a href=\"subir_archivo.php\">Puedes regresar a formulario</a>";
						
						
						}
					
						

					?>
				</article>
			
		
		</section>
		
	
	
	</body>


</html>



