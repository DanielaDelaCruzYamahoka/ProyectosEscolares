<?php
    $server="localhost";
$user="root";
$pass ="";
$db="adoptmebd";

$conexion = new mysqli($server, $user, $pass, $db);

    session_start();
    $usuario=$_SESSION['username'];
    
    $sql2="SELECT * from usuarios";
    
    $ejecutarbusq=mysqli_query($conexion, $sql2);


    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <title>AdoptMe</title>
    <!--Para responsivo-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Para el reset y que el navegador no modifique nada-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preload" href="reset.css"as="style">
    <link rel="stylesheet" href="reset.css">
    <link rel="preload" href="Estilo.css"as="style">
    <link rel="stylesheet" href="Estilo.css">
</head>
<body>
    <section class="navbar">
        <a href="index.html"><img src="logo adoptme.png" class="logo" href="index.html"></a>
       <nav class="Principal">
            <a href="Registro.html" class="NavPrimary">Registrarme</a>
            <a href="InicioSesion.html">Iniciar sesion</a>
            <a href="Adoptar.html">Adoptar</a>
            <a href="Nosotros.html">Sobre nosotros</a>
            <a href="Contacto.html">Contacto</a>
            <a href="PanelAdmin.php">Mi panel</a>
        </nav>  
    </section>
    <section class="PresentacionPanel">
        <header>
        </header>
        <section>
            <h1>Mi Panel</h1>
            <p>No compres la felicidad, adopta</p>
        </section>
        <section>
            <h2><?php echo $usuario ?></h2>
            <p>Se unió en noviembre 2020</p>
        </section>
        <section>
            <img>
            <img>
        </section>
    </section>
    <div class="navHorizontal">
        <a href="index.html">Página principal/</a>
        <a href="PanelAdmin.php"> MiPanel/</a>
        <a href=""> Usuarios</a>
    </div>
    <main class="mainPanel">
        <section class="Opciones-admin">
            <div class="Opciones">
                <a href="MascotasAdmin.php">Mascotas</a>
                <a href="AdopcionesAdmin.php">Adopciones</a>
                <a href="UsuariosAdmin.php">Usuarios</a>
            </div>
        <section>
            <form class="busca" action="buscarUsuario.php" method="POST">
                <input type="text" name="buscar" class="buscadorUsuario" placeholder="Buscar usuario">
                <button type="submit" class="btn-buscaUsuario">
                    <i class="fa fa-search"></i>
                </button>
            </form>
            <div class="TablaUsuarios">
                <table border="1"> 
                    <tr>
                        =Consultar usuarios=
                        <td>IdUsuario</td>
                        <td>Nombre</td>
                        <td>ApellidoP</td>
                        <td>ApellidoM</td>
                        <td>NombreUser</td>
                        <td>Correo</td>
                        <td>Contrasena</td>
                        <td>Acciones</td>
                    </tr>
                    <?php
                while ($fila =mysqli_fetch_array($ejecutarbusq)){
                    ?>
                    <tr>
                        <td><?php echo $fila['0'] ?></td>
                        <td><?php echo $fila['1'] ?></td>
                        <td><?php echo $fila['2'] ?></td>
                        <td><?php echo $fila['3'] ?></td>
                        <td><?php echo $fila['4'] ?></td>
                        <td><?php echo $fila['5'] ?></td>
                        <td><?php echo $fila['6'] ?></td>
                        <td>
                           <a href="editarUsuario.php? 
                           id=<?php echo $fila['0'] ?> &
                           nombre=<?php echo $fila['1'] ?> &
                           apellidop=<?php echo $fila['2'] ?> &
                           apellidom=<?php echo $fila['3'] ?> &
                           usuario=<?php echo $fila['4'] ?> &
                           correo=<?php echo $fila['5'] ?> &
                           contrasena=<?php echo $fila['6'] ?> &">Editar</a>
                           
                           <a href="eliminarUsuario.php">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                }
                
                ?>

                </table>
               
            </div>
            
        </section>
        </section>
    </main>
    <footer>
        <p>Todos los derechos reservados</p>
    </footer>
</body>
</html> 