
<div class="card " style="margin-top: 10px;">
    <div class="card-header text-white bg-secondary  ">
        RocKolas Rentadas
    </div>
    <div class="card-body">

            <a  name="" id="" class="btn btn-primary" href="?controlador=renta&accion=crear">Nueva Renta</a>
            <div style="margin-top: 10px;" ></div>

            <?php

            include_once "tablas/classTablas.php";
            tablacuerpo::renta($productos,1);

            ?>

    </div>
</div>
