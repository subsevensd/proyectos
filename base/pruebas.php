<?php
$host = "localhost";
$user = "root";
$pass = "root";
$base = "usuarioss";
$tabla = array("datosgen","datosloc");
$consulta = "SELECT * FROM ".$tabla[1];


function conectar($host,$user,$pass,$base,$consulta){


$h_con = mysql_connect($host,$user,$pass) or die("No se pudo conectar :S<br>"); echo "Listo :)<br>";
mysql_select_db($base) or die("No pudimos seleccionar tu bd <br>"); echo "seleccionada<br>";
$contenedor = mysql_query($consulta,$h_con) or die("No pudimos hacer la consulta no hay pedo<br>");echo "Bien por tu consulta xD<br>";
$num_file = mysql_num_rows($contenedor);





for($i=0;$i<$num_file;$i++){

	$file = mysql_fetch_array($contenedor);
	echo "<table style=\"border: 3px solid red; background-color:blue;\"><tr><td>".$file['nombre']."</td><td>".$file['email']."</td><td>".$file['pais']."</td></tr></table>";
	


}

/*while($conte_array = mysql_fetch_array($contenedor)){
echo $conte_array['nombre']."-".$conte_array['email']."-".$conte_array['pais']."<br>";

}*/





mysql_close($h_con) or die("no se pudo cerrar"); echo "Ya la cerramos";

}
conectar($host,$user,$pass,$base,$consulta);



?>