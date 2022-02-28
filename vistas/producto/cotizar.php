
<div class="card " style="margin-top: 10px;">
    <div class="card-header text-white bg-dark  ">
Cotizar equipos para Rockola
    </div>
    <div class="card-body">

            <a  name="" id="" class="btn btn-danger" href="vistas/producto/cotizacionpdf.php">Imprimir Cotización</a>

            <div style="margin-top: 10px;" ></div>

            <?php

            include_once "tablas/classTablas.php";
            tablacuerpo::cotizar($productos,1);

            ?>

    </div>
</div>