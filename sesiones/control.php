<?php
if($_POST['user_txt'] == "subsevensd" && $_POST['pass_txt'] == "12345"){
session_start();
$_SESSION['autentificado'] = true;
$_SESSION['usuario'] = $_POST['user_txt'];
header("Location: archivo-protegido.php");

}else{
header("Location: index.php?error=si");


}

?>