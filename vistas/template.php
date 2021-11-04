<!doctype html>
<html lang="en">
  <head>
    <title>Rockolas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="vistas/login.css">
  </head>
  <body>

<?php
session_start(); 
if($_SESSION["logeado"]==1){ ?>


<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="?controlador=paginas&accion=inicio2">Rockolas <span class="visually-hidden">(current)</span></a>
        <a class="nav-item nav-link" href="?controlador=empleados&accion=inicio">Usuarios</a>
        <a class="nav-item nav-link" href="?controlador=clientes&accion=inicio">Clientes</a>
        <a class="nav-item nav-link" href="#">Productos</a>
        <a class="nav-item nav-link" href="#">Rockolas</a>
        <a class="nav-item nav-link" href="#">Rentas</a>
        <a class="nav-item nav-link" href="?controlador=config&accion=config">Configuración</a>
        <a class="nav-item nav-link" href="?controlador=login&accion=salir">Salir</a>
    </div>
</nav>

<?php } ?>

      
<div class="container">
    <div class="row">
        <div class="col-12">
           <?php
           include_once "ruteador.php";
           ?>
        </div>
        
    </div>
</div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>