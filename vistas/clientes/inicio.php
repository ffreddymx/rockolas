
<div class="card " style="margin-top: 10px;">
    <div class="card-header text-white bg-success  ">
        Lista de Clientes 
    </div>
    <div class="card-body">

            <a  name="" id="" class="btn btn-primary" href="?controlador=clientes&accion=crear">Nuevo Cliente</a>
            <div style="margin-top: 10px;" ></div>

            <?php

            include_once "tablas/classTablas.php";


            tablacuerpo::clientes($clientes,1);

            ?>

    </div>
</div>
