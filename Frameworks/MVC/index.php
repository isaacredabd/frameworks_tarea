<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina MVC</title>
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width,
     user-scalable=no,initial-scale=1.0,maximum-scale=1.0,maximum-sacale=1.0">

    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="boostrap/js/bootstrap.min.js" >
    <link rel="stylesheet"href="boostrap/js/bootstrap.js" >
    <script src="https://kit.fontawesome.com/a5018ae4e5.js" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary">
    <div class="card text-white bg-dark " style="max-width:auto;">
    <div class="card-header text-center">SITIO WEB CON MVC</div>
    </div>
            <div class="container bg-dark" style="max-width:120rem;"  >
                <ul class="nav nav-tabs" >
                    <li class="nav-item text-light bg-dark">
                        <a class="nav-link  active   text-light bg-dark" aria-current="page"  href="index.php?controller=UsuarioController&action=mostrarTodos">Inicio</a>
                    </li>
                    <li class="nav-item text-light bg-dark">
                        <a class="nav-link" href="index.php?controller=UsuarioController&action=crear">Guardar</a>
                    </li>
                    <li class="nav-item text-light bg-dark">
                        <a class="nav-link" href="index.php?controller=UsuarioController&action=listareliminar">Eliminar</a>
                    </li>
                    <li class="nav-item text-light bg-dark">
                        <a class="nav-link" href="index.php?controller=UsuarioController&action=listarmodificar" >Modificar</a>
                    </li>
                    <li class="nav-item text-light bg-dark">
                        <a class="nav-link" href="index.php?controller=UsuarioController&action=buscar" >Buscar</a>
                    </li>
                 </ul>
            </div>

<?php



require_once 'controller/UsuarioController.php';

if(isset($_GET['controller']))
{
    $nombrecontrolador = $_GET['controller'];
    $controlador = new $nombrecontrolador();
    if(isset($_GET['action']))
    {
     $action = $_GET['action'];
     $controlador->$action();   
    }
}
?>

</body>
</html>