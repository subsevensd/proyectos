<?php include("sesion.php"); ?>
Bienvenido:

<?php echo $_SESSION['usuario']; ?>
<br><br>
Estas en otra pagina segura con sesiones php
<br><br>
<a href="archivo-protegido.php">Ir a la primera pagina segura</a>
<br><br>
<a href="salir.php">Cerrar sesion</a>

