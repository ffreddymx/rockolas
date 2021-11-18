
<div class="card " style="margin-top: 10px;">
    <div class="card-header text-white bg-dark  ">
        Color
    </div>
    <div class="card-body">

            <a  name="" id="" class="btn btn-primary" href="?controlador=color&accion=crear">Agregar color</a>
            <div style="margin-top: 10px;" ></div>

            <?php

            include_once "tablas/classTablas.php";
            tablacuerpo::color($productos,1);

            ?>

    </div>
</div>
