<?php

$server="localhost";
$user="root";
$pass ="";
$db="adoptmebd";

$conexion = new mysqli($server, $user, $pass, $db);

session_start();

$nombreusu=$_POST['usuario'];
$contra=$_POST['contraseña'];

	//hacemos la sentencia sql
$sql="SELECT COUNT(*) as contar FROM administradores WHERE NombreUserA ='$nombreusu' and ContrasenaA='$contra'";

//ejecucion de sentencia sql
$ejecutar=mysqli_query($conexion, $sql);
$array=mysqli_fetch_array($ejecutar);

//verificamos la ejecucion
if($array['contar']>0){
	$_SESSION['username']=$nombreusu;
	header("location: PanelAdmin.php");
}else{
	echo"<br>Datos incorrectos<br> <a href='InicioSesionAd.html'>Volver</a>";
	
}

?>