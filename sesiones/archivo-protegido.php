<?php include("sesion.php"); ?>
Bienvenido:

<?php echo $_SESSION['usuario']; ?>
<br><br>
Estas en una pagina segura con sesiones php
<br><br>
<a href="archivo-protegido2.php">Ir a otra pagina segura</a>
<br><br>
<a href="salir.php">Cerrar sesion</a>
