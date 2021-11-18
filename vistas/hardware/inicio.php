
<div class="card " style="margin-top: 10px;">
    <div class="card-header text-white bg-dark  ">
        Tipos de HardWare 
    </div>
    <div class="card-body">

            <a  name="" id="" class="btn btn-primary" href="?controlador=hardware&accion=crear">Agregar nuevo HardWare</a>
            <div style="margin-top: 10px;" ></div>

            <?php

            include_once "tablas/classTablas.php";
            tablacuerpo::hardware($productos,1);

            ?>

    </div>
</div>
