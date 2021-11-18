
<div class="card " style="margin-top: 10px;">
    <div class="card-header text-white bg-dark  ">
        RocKolas Para Rentas
    </div>
    <div class="card-body">

            <a  name="" id="" class="btn btn-primary" href="?controlador=rockola&accion=crear">Nuevo Rockola</a>
            <div style="margin-top: 10px;" ></div>

            <?php

            include_once "tablas/classTablas.php";
            tablacuerpo::rockola($productos,1);

            ?>

    </div>
</div>
