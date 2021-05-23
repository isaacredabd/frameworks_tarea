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
</head>
<body>
    <h1>Sitio web con MVC </h1>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"> <a href="index.php?controller=UsuarioController&action=mostrarTodos">Home</a> </li>
            <li> <a href="index.php?controller=UsuarioController&action=crear">Guardar</a> </li>
            <li> <a href="index.php?controller=UsuarioController&action=listareliminar">Eliminar</a> </li>
            <li> <a href="index.php?controller=UsuarioController&action=listarmodificar">Modificar</a> </li>
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