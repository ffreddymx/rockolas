
<div class="card " style="margin-top: 10px;">
    <div class="card-header text-white bg-secondary  ">
        Compras - Lista de Equipos Adquiridos  
    </div>
    <div class="card-body">

    <?php
          $id = (isset($_POST['busqueda'])) ? $_POST['busqueda'] : '';
   ?>
            <a  name="" id="" class="btn btn-primary" href="?controlador=producto&accion=crear">Nuevo Producto</a>
            <a  name="" id="" class="btn btn-danger" href="vistas/producto/imprimirpdf.php?val=<?php  echo $id; ?>   ">Imprimir</a>



            <div style="margin-top: 10px;" ></div>
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
            tablacuerpo::producto($productos,1);
            ?>

    </div>
</div>
