<?php
if(!$_COOKIE["s_idioma"]) header("Location: index.php");
else if($_COOKIE["s_idioma"]=="es") header("Location: espan.php");
else if($_COOKIE["s_idioma"]=="en") header("Location: eng.php");
?>
