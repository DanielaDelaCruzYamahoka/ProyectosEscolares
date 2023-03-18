<?php

$id=$_POST['id'];
$nombreUsu=$_POST['nombre'];
$apellidoP=$_POST['apellidop'];
$apellidoM=$_POST['apellidom'];
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$server="localhost";
$user="root";
$pass ="";
$db="adoptmebd";

$conexion = new mysqli($server, $user, $pass, $db);

$sql ="UPDATE usuarios set Nombre='$nombreUsu', ApellidoP='$apellidoP', ApellidoM='apellidoM', Usuario='$usuario', Correo='$correo', Contrasena='$contraseña' WHERE  IdUsuario like'$id'";

$rta = mysqli_query($conexion, $sql);

if($rta){
    header("Location: UsuariosAdmin.php");
    
}else{
    echo "No se Actualizo";
}
?>