
<div class="card " style="margin-top: 10px;">
    <div class="card-header text-white bg-dark  ">
        Marcas de los equipos 
    </div>
    <div class="card-body">

            <a  name="" id="" class="btn btn-primary" href="?controlador=marca&accion=crear">Nueva Marca</a>
            <div style="margin-top: 10px;" ></div>

            <?php

            include_once "tablas/classTablas.php";
            tablacuerpo::marca($productos,1);

            ?>

    </div>
</div>
