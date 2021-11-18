
<div class="card " style="margin-top: 10px;">
    <div class="card-header text-white bg-secondary  ">
        Compras - Lista de Equipos Adquiridos  
    </div>
    <div class="card-body">

            <a  name="" id="" class="btn btn-primary" href="?controlador=producto&accion=crear">Nuevo Producto</a>
            <div style="margin-top: 10px;" ></div>

            <?php

            include_once "tablas/classTablas.php";
            tablacuerpo::producto($productos,1);

            ?>

    </div>
</div>
