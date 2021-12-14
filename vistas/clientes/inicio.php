
<div class="card " style="margin-top: 10px;">
    <div class="card-header text-white bg-success  ">
        Lista de Clientes 
    </div>
    <div class="card-body">

   <?php
          $id = (isset($_POST['busqueda'])) ? $_POST['busqueda'] : '';

   ?>

    <a  name="" id="" class="btn btn-primary" href="?controlador=clientes&accion=crear">Nuevo Cliente</a>
    <a  name="" id="" class="btn btn-danger" href="vistas/clientes/imprimirpdf.php?val=<?php  echo $id; ?>   ">Imprimir</a>
    

    
    <div style="margin-top: 10px;" >
    <form action="" method="post">
    <div class="input-group">    
    <input type="text" name="busqueda" class="form-control" placeholder="Buscar...">
    <div class="input-group-btn">
      <input class="btn btn-default" type="submit" value="Buscar">
    </div>
  </div>
</form>
</div>

            <?php

            include_once "tablas/classTablas.php";


            tablacuerpo::clientes($clientes,1);

            ?>

    </div>
</div>
