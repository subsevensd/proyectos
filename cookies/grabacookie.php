<?php 
setcookie("s_idioma",$_GET["idioma"],time()+60,"/");
header("Location: eligecookie.php");

?> 
	